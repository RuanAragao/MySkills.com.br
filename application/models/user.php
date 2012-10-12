<?php
class User extends Eloquent
{
	function setUserData(&$user_data) {
		Log::myskills('setUSerData');
		$this->uid 		= $user_data['info']['uid'];
		$this->provider 	= $user_data['provider'];
		$this->name = $user_data['info']['name'];
		$this->nickname = $user_data['info']['nickname'];	
		switch($user_data['provider']) {
			case 'facebook' :
      			$this->image = $user_data['info']['image'];
				$this->email = $user_data['info']['email'];
				$this->social_url = $user_data['info']['urls']['facebook'];      			
			break;
			case 'github' :
      			$github = json_decode(file_get_contents('https://api.github.com/users/'.$this->nickname));
      			$this->image = $github->avatar_url;
				$this->email = $user_data['info']['email'];
				$this->social_url = $user_data['info']['urls']['github'];					
			break;
			case 'linkedin' :
				$this->social_url = $user_data['info']['urls']['linkedin'];
      			$this->image = $user_data['info']['image'];
			break;
		} 
	}	
}