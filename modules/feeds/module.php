<?php

//
// Copyright (C) Paul Forsyth 2007, All rights reserved.
//
// This file may be distributed and/or modified under the terms of the
// "GNU General Public License" version 2 as published by the Free
// Software Foundation
//
// This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
// THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
// PURPOSE.
//
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// Author:       Paul Forsyth
// Version:      $Id:$

$Module = array( "name" => "open social feeds",
                 "variable_params" => true );

$ViewList = array();

// Standard people module view. So far it sounds like it is all-singing-dancing view.
//

// http://code.google.com/apis/opensocial/docs/gdata/people/reference.html
// Not sure if 'UserID' can be a simple object/remote id?
$ViewList["people"] = array(
    "functions" => array( 'people' ),
    "script" => "people.php",
    "params" => array( 'FeedType', 'UserID', 'Friends' ) );

// 'User' and 'Friends' in the unordered param section is wrong. Or it needs to be coded carefully. Only the value is required
//  in the google spec.
$ViewList["apps"] = array(
    "functions" => array( 'apps' ),
    "script" => "apps.php",
    "params" => array( 'AppID', 'Persistence' ),
    "unordered_params" => array( 'global' => 'GlobalKey',
                                 'user' => 'UserID',
                                 'instance' => 'InstanceID' ,
                                 'friends' => 'Friends' ));

// Not sure if we need granularity for every view just yet. Added in case it is needed.
$FunctionList['people'] = array( );

?>
