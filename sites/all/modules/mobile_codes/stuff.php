$view = new view();
$view->name = 'qr_code';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'QR code';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'QR code';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'role';
$handler->display->display_options['access']['role'] = array(
2 => '2',
);
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['empty'] = TRUE;
$handler->display->display_options['empty']['area']['content'] = 'There are currently no sessions in your schedule. Look for and click "Add this session to your schedule" on any accepted session to add the session here.';
$handler->display->display_options['empty']['area']['format'] = 'filtered_html';
/* Relationship: Flags: session_schedule */
$handler->display->display_options['relationships']['flag_content_rel']['id'] = 'flag_content_rel';
$handler->display->display_options['relationships']['flag_content_rel']['table'] = 'node';
$handler->display->display_options['relationships']['flag_content_rel']['field'] = 'flag_content_rel';
$handler->display->display_options['relationships']['flag_content_rel']['label'] = 'schedule';
$handler->display->display_options['relationships']['flag_content_rel']['flag'] = 'session_schedule';
$handler->display->display_options['relationships']['flag_content_rel']['user_scope'] = 'any';
/* Relationship: Flags: User */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'flag_content';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
$handler->display->display_options['relationships']['uid']['relationship'] = 'flag_content_rel';
$handler->display->display_options['relationships']['uid']['label'] = 'Schedule user';
/* Relationship: Entity Reference: Referenced Entity */
$handler->display->display_options['relationships']['field_session_timeslot_target_id']['id'] = 'field_session_timeslot_target_id';
$handler->display->display_options['relationships']['field_session_timeslot_target_id']['table'] = 'field_data_field_session_timeslot';
$handler->display->display_options['relationships']['field_session_timeslot_target_id']['field'] = 'field_session_timeslot_target_id';
/* Relationship: Content: Author */
$handler->display->display_options['relationships']['uid_1']['id'] = 'uid_1';
$handler->display->display_options['relationships']['uid_1']['table'] = 'node';
$handler->display->display_options['relationships']['uid_1']['field'] = 'uid';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Field collection item: Time Slot */
$handler->display->display_options['fields']['field_slot_types_time_slot']['id'] = 'field_slot_types_time_slot';
$handler->display->display_options['fields']['field_slot_types_time_slot']['table'] = 'field_data_field_slot_types_time_slot';
$handler->display->display_options['fields']['field_slot_types_time_slot']['field'] = 'field_slot_types_time_slot';
$handler->display->display_options['fields']['field_slot_types_time_slot']['relationship'] = 'field_session_timeslot_target_id';
$handler->display->display_options['fields']['field_slot_types_time_slot']['label'] = '';
$handler->display->display_options['fields']['field_slot_types_time_slot']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_slot_types_time_slot']['settings'] = array(
'link' => 0,
);
/* Field: Content: Room assignment */
$handler->display->display_options['fields']['field_room_assignment']['id'] = 'field_room_assignment';
$handler->display->display_options['fields']['field_room_assignment']['table'] = 'field_data_field_room_assignment';
$handler->display->display_options['fields']['field_room_assignment']['field'] = 'field_room_assignment';
$handler->display->display_options['fields']['field_room_assignment']['settings'] = array(
'link' => 0,
);
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid_1';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: Flags: User uid */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'flag_content';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['relationship'] = 'flag_content_rel';
$handler->display->display_options['arguments']['uid']['default_action'] = 'default';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'current_user';
$handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['uid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['uid']['validate']['type'] = 'php';
$handler->display->display_options['arguments']['uid']['validate_options']['code'] = 'if($GLOBALS[\'user\']->uid == $argument) {
return TRUE;
} elseif((arg(0) == \'user\' && is_numeric(arg(1)) && arg(2) == \'schedule\')) {
drupal_set_message(t(\'You may view your schedule only. Schedules are not publicly shared.\'), \'warning\');
}
';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
'session' => 'session',
);
/* Filter criterion: Content: Status (field_accepted) */
$handler->display->display_options['filters']['field_accepted_value']['id'] = 'field_accepted_value';
$handler->display->display_options['filters']['field_accepted_value']['table'] = 'field_data_field_accepted';
$handler->display->display_options['filters']['field_accepted_value']['field'] = 'field_accepted_value';
$handler->display->display_options['filters']['field_accepted_value']['value'] = array(
1 => '1',
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'my_schedule');
$handler->display->display_options['path'] = 'user/%/schedule';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'My Schedule';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['context'] = 0;
$handler->display->display_options['menu']['context_only_inline'] = 0;
