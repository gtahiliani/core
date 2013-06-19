<?php

/**
* ownCloud - User Management
*
* @author Raghu Nayyar
* @copyright 2013 Raghu Nayyar raghu.nayyar.007@gmail.com
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/
namespace OC\Settings\Users;

class UserManagement {
	
	/* To return the group list */
	public getUsergroups($user) {
		return OC_Group::getUserGroups($user);
	}
	
	/* Call All Users, irrespective of the Groups */
	public getEveryone() {
		$users = array(
			"name" => $uid,
			"displayName" => $displayName, 
			"groups" => join( ", ", OC_Group::getUserGroups($uid)),
			'quota'=>$quota,
			'isQuotaUserDefined'=>$isQuotaUserDefined
		);
		return $users;
	}
	/* Call All Admins. */
	public getadminUser() {
		return OC_User::isAdminUser(OC_User::getUser());
	}
	
}

?>