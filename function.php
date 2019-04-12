<?php

	class USER
	{
	    public $db;
	 
	    function __construct($con)
	    {
	      $this->db = $con;
	    }

	 

	public function getHouseOwner($house_owner_email)
	{
		$select= $this->db->prepare("SELECT * FROM house_owner_table WHERE house_owner_email='$house_owner_email'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	} 

	public function getCustomer($house_owner_email)
	{
		$select= $this->db->prepare("SELECT * FROM customer_table WHERE customer_email='$house_owner_email'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	} 

	public function insert_multiple_Customer ($house_owner_email, $house_owner_name, $password)
	{
			
		$st = $this->db->prepare("INSERT INTO customer_table (customer_email,customer_name,customer_password) VALUES (:house_owner_email,:house_owner_name,:house_owner_password)");
		$st->bindParam(':house_owner_email',$house_owner_email);
		$st->bindParam(':house_owner_password',$password);
		$st->bindParam(':house_owner_name',$house_owner_name);

				
		$st->execute();

		$id=$this->db->lastInsertId();

			
				
		return $id;
			
			
		 			
			
	}

	public function addFlat($house_owner_id,$flat_division,$flat_type,$flat_area,$flat_rent,$flat_rent_advance,$flat_details,$flat_picture,$flat_date)
	{
			
		$st = $this->db->prepare("INSERT INTO flat_table (flat_owner_id,flat_division,flat_type,flat_area,flat_rent,flat_rent_advance,flat_details,flat_picture,flat_date) VALUES (:house_owner_id,:flat_division,:flat_type,:flat_area,:flat_rent,:flat_rent_advance,:flat_details,:flat_picture,:flat_date)");
		$st->bindParam(':house_owner_id',$house_owner_id);
		$st->bindParam(':flat_division',$flat_division);
		$st->bindParam(':flat_type',$flat_type);
		$st->bindParam(':flat_area',$flat_area);
		$st->bindParam(':flat_rent',$flat_rent);
		$st->bindParam(':flat_rent_advance',$flat_rent_advance);
		$st->bindParam(':flat_details',$flat_details);
		$st->bindParam(':flat_picture',$flat_picture);
		$st->bindParam(':flat_date',$flat_date);
		

				
		$st->execute();

		$id=$this->db->lastInsertId();

			
				
		return $id;
			
			
		 			
			
	}
	public function LoginHouseOwner($email, $password)
	{
		$select = $this->db->prepare("SELECT * FROM house_owner_table WHERE house_owner_email=:email and house_owner_password=:password");
		$select->bindParam(':email', $email);
		$select->bindParam(':password', $password);
		$select->setFetchMode(PDO::FETCH_ASSOC);

		$select->execute();
		$data=$select->fetch();
		return $data;
	}


	public function LoginCustomer($email, $password)
	{
		$select = $this->db->prepare("SELECT * FROM customer_table WHERE customer_email=:email and customer_password=:password");
		$select->bindParam(':email', $email);
		$select->bindParam(':password', $password);
		$select->setFetchMode(PDO::FETCH_ASSOC);

		$select->execute();
		$data=$select->fetch();
		return $data;
	}

	public function getCustomerId($id)
	{
		$select= $this->db->prepare("SELECT * FROM customer_table WHERE customer_id='$id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	} 

	public function getHouseOwnerId($id)
	{
		$select= $this->db->prepare("SELECT * FROM house_owner_table WHERE house_owner_id='$id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	} 

	public function EditHouseOwner($id,$house_owner_name,$house_owner_phone,$house_owner_mobile,$house_owner_occupation)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE house_owner_table SET house_owner_name=:house_owner_name,house_owner_phone=:house_owner_phone,house_owner_mobile=:house_owner_mobile,house_owner_occupation=:house_owner_occupation WHERE house_owner_id=:id");
				$select->bindParam(':id',$id);
				$select->bindParam(':house_owner_name',$house_owner_name);
				$select->bindParam(':house_owner_phone',$house_owner_phone);
				$select->bindParam(':house_owner_mobile',$house_owner_mobile);
				$select->bindParam(':house_owner_occupation',$house_owner_occupation);
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function EditCustomer($id,$customer_name,$customer_phone_number,$customer_occupation)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE customer_table SET customer_name=:customer_name,customer_phone_number=:customer_phone_number,customer_occupation=:customer_occupation WHERE customer_id=:id");
				$select->bindParam(':id',$id);
				$select->bindParam(':customer_name',$customer_name);
				$select->bindParam(':customer_phone_number',$customer_phone_number);
				
				$select->bindParam(':customer_occupation',$customer_occupation);
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function editFlat($id,$flat_area,$flat_type,$flat_rent,$flat_rent_advance,$flat_details)
		{
			try
			{
				
				$select= $this->db->prepare("UPDATE flat_table SET flat_area=:flat_area,flat_type=:flat_type,flat_rent=:flat_rent, flat_rent_advance=:flat_rent_advance, flat_details=:flat_details WHERE flat_id=:id");
				$select->bindParam(':id',$id);
				$select->bindParam(':flat_area',$flat_area);
				$select->bindParam(':flat_type',$flat_type);
				
				$select->bindParam(':flat_rent',$flat_rent);
				$select->bindParam(':flat_rent_advance',$flat_rent_advance);
				$select->bindParam(':flat_details',$flat_details);
				
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				 
				//$data=$select->fetchAll();
				
			}
			
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public function EditDocPic($id,$doctor_picture)
		{
			$select= $this->db->prepare("UPDATE customer_table SET customer_picture=:doctor_picture WHERE customer_id=:id");
			$select->bindParam(":id",$id);
			$select->bindParam(":doctor_picture",$doctor_picture);
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();

			
				 
		}

		public function EditDocPicHw($id,$doctor_picture)
		{
			$select= $this->db->prepare("UPDATE house_owner_table SET house_owner_image=:doctor_picture WHERE house_owner_id=:id");
			$select->bindParam(":id",$id);
			$select->bindParam(":doctor_picture",$doctor_picture);
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();

			
				 
		}

		public function EditFlatPic($id,$doctor_picture)
		{
			$select= $this->db->prepare("UPDATE flat_table SET flat_picture=:doctor_picture WHERE flat_id=:id");
			$select->bindParam(":id",$id);
			$select->bindParam(":doctor_picture",$doctor_picture);
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();

			
				 
		}

		public function getArea($div)
		{
			$select= $this->db->prepare("SELECT area_name FROM $div");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetchAll();
			return $torres;
		}

		public function getFlat($id)
		{
			$select= $this->db->prepare("SELECT * FROM flat_table WHERE flat_id=$id");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetchAll();
			return $torres;
		}

		public function getfiltered($flat_division,$flat_type,$flat_area,$flat_rent)
		{
			$select= $this->db->prepare("SELECT * FROM flat_table WHERE flat_division='$flat_division' AND flat_type='$flat_type' AND flat_area='$flat_area' AND flat_rent<=$flat_rent");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetchAll();
			return $torres;
		}

		public function getAllFlat()
		{
			$select= $this->db->prepare("SELECT * FROM flat_table");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetchAll();
			return $torres;
		}

		public function getFlatUser($id)
		{
			$select= $this->db->prepare("SELECT * FROM flat_table WHERE flat_owner_id=$id");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetchAll();
			return $torres;
		}

		public function getFlats($flat_division)
		{
			$select= $this->db->prepare("SELECT * FROM flat_table WHERE flat_division='$flat_division'");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetchAll();
			return $torres;
		}


		public function getOwner($id)
		{
			$select= $this->db->prepare("SELECT * FROM house_owner_table WHERE house_owner_id=$id");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetch();
			return $torres;
		}

		public function allarea()
		{
			$select= $this->db->prepare("SELECT flat_area FROM flat_table");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			$torres=$select->fetchAll();
			return $torres;
		}

		public function deleteFlat($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM flat_table WHERE flat_id=:id");
				$select->bindParam(':id',$id);
				
				$select->execute();
				//header ("location:details.php");
				 
				
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}
	
	/*	public function getUserName($name)
	{
		$select= $this->db->prepare("select user_name from user_info_table where user_name like :name");
		$select->execute(array(':name' => $name.'%'));			 
		$data=$select->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}

	public function getUserIdfromname($name)
	{
		$select= $this->db->prepare("SELECT user_id FROM user_info_table WHERE user_name='$name'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	} 

	public function getUserId($id)
	{
		$select= $this->db->prepare("SELECT * FROM user_info_table WHERE user_id='$id'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
			 
		$torres=$select->fetch();
		return $torres;
	}

	public function Event()
	{
		$qry = $this->db->prepare("SELECT * FROM event_table");
		$qry->execute();
	
		$row=$qry->fetchAll();
		return $row;
	}

	
		

		public function search($user_hall,$user_batch,$user_country)
		{
			//$user_hall="Mir Mosharrof Hossain Hall";
			//$user_batch="44";
			//$user_country="Bangladesh";
			$select=$this->db->prepare("SELECT * FROM user_info_table WHERE user_hall=:user_hall AND user_batch=:user_batch AND user_country=:user_country");
			$select->bindParam(':user_batch',$user_batch);
			$select->bindParam(':user_hall',$user_hall);
			$select->bindParam(':user_country',$user_country);

			 $select->setFetchMode(PDO::FETCH_ASSOC);
			 $select->execute();
			 
			 $data=$select->fetchAll();
		}


	public function Login ($email, $password)
	{
		$select = $this->db->prepare("SELECT * FROM user_info_table WHERE user_email=:email and user_password=:password");
		$select->bindParam(':email', $email);
		$select->bindParam(':password', $password);
		$select->setFetchMode(PDO::FETCH_ASSOC);

		$select->execute();
		$data=$select->fetch();
		return $data;
	}

		public function admin_check ($id)
	{
		$select = $this->db->prepare("SELECT * FROM admin_table WHERE user_id=:id");
		$select->bindParam(':id', $id);
		
		$select->setFetchMode(PDO::FETCH_ASSOC);

		$select->execute();
		$data=$select->fetch();
		return $data;
	}	


	

		public function EditPic($id,$user_pic)
		{
			$select= $this->db->prepare("UPDATE user_info_table SET user_picture1=:user_pic WHERE user_id=:id");
			$select->bindParam(":id",$id);
			$select->bindParam(":user_pic",$user_pic);
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			


		}

		public function EditCoverPic($id,$user_pic)
		{
			$select= $this->db->prepare("UPDATE user_info_table SET user_picture2=:user_pic WHERE user_id=:id");
			$select->bindParam(":id",$id);
			$select->bindParam(":user_pic",$user_pic);
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
				 
			


		}

		public function getAll()
		{
			
			$st = $this->db->prepare("SELECT * FROM user_info_table");
			$st->execute();
            //$ul=$st->fetch(PDO::FETCH_ASSOC);
            return $st;
			
		}


		public function delete_user($id)
		{
			try{
				$select = $this->db->prepare("DELETE FROM user_info_table WHERE user_id=:id");
				$select->bindParam(':id',$id);
				
				$select->execute();
				//header ("location:details.php");
				 
				
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function get_event($id)
		{
			$select = $this->db->prepare("SELECT * FROM event_table WHERE id=:id");
			$select->bindParam(':id',$id);
			$select->execute();
			$data=$select->fetch();
			return $data;
		}
		public function update_event($event_title,$event_date,$event_time,$event_activity,$event_venue,$event_organizer,$event_type,$id)
		{

			$select = $this->db->prepare("UPDATE event_table SET event_title=:event_title,event_date=:event_date,event_time=:event_time,event_activity=:event_activity,event_venue=:event_vanue,event_organizer=:event_organizer,event_type=:event_type WHERE id=:id");


				$select->bindParam(':event_title',$event_title);
				$select->bindParam(':event_date',$event_date);
				$select->bindParam(':event_time',$event_time);
				$select->bindParam(':event_activity',$event_activity);
				$select->bindParam(':event_vanue',$event_vanue);
				$select->bindParam(':event_organizer',$event_organizer);
				$select->bindParam(':event_type',$event_type);
				$select->bindParam(':id',$id);

				$select->execute();



		}


		
*/
}		
?>    