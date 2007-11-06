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

$Module = array( "name" => "open social activities",
                 "variable_params" => true );

$ViewList = array();

// Standard activities module view. 

// http://code.google.com/apis/opensocial/docs/gdata/activities/developers_guide_protocol.html
// Now this one is weird. Google want the format to be like: http://***/activities/feeds/activities/***. wtf?
// why the two activities?
$ViewList["feeds"] = array(
    "functions" => array( 'feeds' ),
    "script" => "feeds.php",
    "params" => array( 'Activities' ),
    "unordered_params" => array( 'user' => 'UserID',
                                 'source' => 'SourceID' ));

// Not sure if we need granularity for every view just yet. Added in case it is needed.
$FunctionList['activities'] = array( );

?>
