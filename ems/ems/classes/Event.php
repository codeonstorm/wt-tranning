<?php 
class Event {

  public function create($data) {
    try {
      $conn = DB::conn();

      $stmt = $conn->prepare("INSERT INTO events (uuid, organiser_id, organiser_name, title, description, event_email,
       event_mobile, venue, start_time, end_time, banner, accepted_policy, total_views, status, created_at, updated_at)
      VALUES (:fname, :lname, :email, :mobile, :password, :created_at, :updated_at)");
      $stmt->bindParam(':uuid', $uuid);
      $stmt->bindParam(':organiser_id', $organiser_id);
      $stmt->bindParam(':organiser_name', $organiser_name);
      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':description', $description);
      $stmt->bindParam(':event_email', $event_email);
      $stmt->bindParam(':event_mobile', $event_mobile);
      $stmt->bindParam(':venue', $venue);
      $stmt->bindParam(':start_time', $start_time);
      $stmt->bindParam(':end_time', $end_time);
      $stmt->bindParam(':banner', $banner);
      $stmt->bindParam(':accepted_policy', $accepted_policy);
      $stmt->bindParam(':total_views', $total_views);
      $stmt->bindParam(':status', $status);
      $stmt->bindParam(':created_at', $created_at);
      $stmt->bindParam(':updated_at', $updated_at);

      // insert a row
      $uuid = bin2hex(random_bytes(16)); // 16 bytes = 128 bits
      $organiser_id = $organiser_id;
      $organiser_name = $data['organiser_name'];
      $description = $data['description'];
      $event_email = $data['event_email'];
      $event_mobile = $data['event_mobile'];
      $venue = $data['venue'];
      
      $dateTime = new DateTime($data['start_time']);
      $start_time = $dateTime->format("Y-m-d H:i:s");

      $dateTime = new DateTime($data['end_time']);
      $end_time = $dateTime->format("Y-m-d H:i:s");

      $banner = $data['banner'];
      $accepted_policy = $data['accepted_policy'];
      $total_views = $data['total_views'];
      $status = $data['status'];
      $created_at = date('Y-m-d h:m:s');
      $updated_at = $created_at;
      $stmt->execute();

      return true;

    } catch(PDOException $e) {
      return false;
    }
 
  }

  
  public function update($email) {
 
  }

  public function delete($email) {
 
  }

  public function getByUUID($uuid) {
    try {
      $conn =  DB::conn();
      $stmt = $conn->prepare("SELECT * FROM events WHERE uuid='$uuid'");
      $stmt->execute();

      $event = $stmt->fetch(PDO::FETCH_ASSOC);

      if(empty($event)){
        return false;
      }
    } catch(PDOException $e) {
      echo $e;
      return false;
    }
  }

  public function getEvents() {
    try {
      $conn =  DB::conn();
      $stmt = $conn->prepare("SELECT * FROM events WHERE status=1");
      $stmt->execute();

      $event = $stmt->fetch(PDO::FETCH_ASSOC);
      if(empty($event)){
        return false;
      }
      return $event;
      
    } catch(PDOException $e) {
      echo $e;
      return false;
    }
  }
}
 

 