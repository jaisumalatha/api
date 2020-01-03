<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
| -------------------------------------------------------------------------
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
| There are three reserved routes:
|
|$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//Common
$route['terms-and-conditions/(:any)']='preview/terms/$1';
$route['terms-and-conditions']='preview/terms';
$route['privacy-policy']='preview/policy';

$route['api/item/(:any)']='api/postitem/index/$1';
$route['api/item']='api/postitem/index';

/** Start Post **/
$route['default_controller']='dashboard/begin_dashboard';
$route['timeline']='dashboard/begin_dashboard'; //admin4 &5 - post
$route['post-more']='dashboard/post_list_more';
$route['post-update']='dashboard/post_update';
$route['post-delete']='dashboard/post_delete';
$route['post-favourite']='dashboard/post_favourite';
$route['post-report']='dashboard/post_report';
$route['post-encourage']='dashboard/post_encourage';
$route['post-encouragers-list']='dashboard/post_encouragers_list';
$route['post-comment-delete']='dashboard/post_comment_delete';
$route['post-comment-add']='dashboard/post_comment_add';
$route['post-comment-more']='dashboard/post_comment_more';
$route['post-encouragers-more']='dashboard/post_encouragers_more';
$route['post-share-content']='dashboard/post_share_content';
$route['post-share-update']='dashboard/post_share_update';
$route['post-shared_members-list']='dashboard/post_shared_members_list';
$route['post-add']='dashboard/post_add';
$route['post-tag-selected']='dashboard/post_tag_selected';
$route['upload/(:num)']='home/file_upload/$1';
$route['post-add-gallery-temp']='dashboard/post_add_gallery_temp';
$route['post-delete-gallery-temp']='dashboard/post_delete_gallery_temp';
$route['post/(:num)']='dashboard/begin_dashboard/$1';
$route['recent-updates-more']='dashboard/recent_updates_more';
$route['recent-updates-more-main']='dashboard/recent_updates_more_main';
$route['recent-jobs']='dashboard/recent_jobs';
$route['suggested-connection']='dashboard/suggested_connection';
$route['leader-board']='dashboard/leader_board';
$route['link-post']='dashboard/link_post';

$route['log-notes-more']='dashboard/log_notes_more'; //admin4 and admin5 dashboard

/*------------------------Before Login--------------------------------------*/
$route['discover-more']='dashboard/discover_more';
$route['discover']='dashboard/discover';
$route['discover/(:num)/(:any)']='dashboard/discover_view/$1/$2';
/** End Post **/

/** Start Chat **/
$route['chat/open-chat']='chat/open_chat';
$route['messages/(:num)']='chat/begin_chat/$1';
$route['messages/(:num)/(:num)']='chat/begin_chat/$1/$2';
$route['messages']='chat/begin_chat';
$route['chat/inbox-outbox-list']='chat/inbox_outbox_list';
$route['chat/chatuser-detail']='chat/chatuser_detail';
$route['chat/follow-open-chat']='chat/follow_open_chat';
$route['chat/insert-chat']='chat/insert_chat';
$route['chat/update-last-seen']='chat/update_last_seen';
$route['chat/load-more-messages']='chat/load_more_messages';
$route['chat/check-new-message']='chat/check_new_message';
$route['chat/check-new-chat']='chat/check_new_chat';
$route['chat/create-chat-connection']='chat/create_chat_connection';
$route['chat/send-text-connection']='chat/send_text_connection';
$route['chat/get-group-members']='chat/get_group_members';
$route['chat/side-chat']='chat/side_chat';
$route['chat/side-chat-list']='chat/side_chat_list';
/** End Chat **/
/** Start Accelerator - Youth **/

$route['accelerator']='accelerator/accelerator';
$route['accelerator-new']='accelerator/accelerator/accelerator_new';
$route['accelerator/check-code']='accelerator/accelerator/check_code';
$route['accelerator/yes-ihave-update']='accelerator/accelerator/yes_ihave_update';
$route['accelerator/check-video-filter-answer']='accelerator/accelerator/check_video_filter_answer';
$route['accelerator/let-me-know-email']='accelerator/accelerator/let_me_know_email';
$route['accelerator/skip']='accelerator/accelerator';
$route['accelerator/select-program']='accelerator/accelerator/select_program';
$route['accelerator/program-details']='accelerator/accelerator/program_details';
$route['accelerator/location-accept']='accelerator/accelerator/location_accept';
$route['accelerator/preparation']='accelerator/accelerator/preparation';
$route['accelerator/focusing-finish']='accelerator/accelerator/focusing_finish';
$route['accelerator/uniform-size']='accelerator/accelerator/uniform_size';
$route['accelerator/uniform-submit']='accelerator/accelerator/uniform_submit';
$route['accelerator/dashboard']='accelerator/accelerator/dashboard';
$route['accelerator/interview-tips']='accelerator/accelerator/interview_tips';
$route['accelerator/watch-interview-tips']='accelerator/accelerator/watch_interview_tips';
$route['accelerator/cancel-interview']='accelerator/accelerator/cancel_interview';
$route['accelerator/add-question-answer-video-filter']='accelerator/accelerator/add_question_answer_video_filter';
$route['accelerator/highlight-location']='accelerator/accelerator/highlight_location';
$route['accelerator/rsic']='accelerator/accelerator/about_rsic';
$route['accelerator/myprofile']='profile/accelerator_cv';
$route['accelerator/update-about-me']='profile/update_about_me';
$route['accelerator/selected-checklist']='accelerator/accelerator/selected_checklist';
$route['accelerator/lets-go-update']='accelerator/accelerator/lets_go_update';
$route['accelerator/acc-tutorial-points']='accelerator/accelerator/acc_tutorial_points';

$route['accelerator/acc-post-add']='accelerator/showcase/acc_post_add';
$route['accelerator/acc-post-add-gallery-temp']='accelerator/showcase/acc_post_add_gallery_temp';
$route['accelerator/acc-post-delete-gallery-temp']='accelerator/showcase/acc_post_delete_gallery_temp';

$route['accelerator/showcase']='accelerator/showcase/showcase';
$route['accelerator/showcase-post-more']='accelerator/showcase/showcase_post_more';
$route['accelerator/acc-post-delete']='accelerator/showcase/acc_post_delete';
$route['accelerator/acc-post-update']='accelerator/showcase/acc_post_update';
$route['accelerator/acc-post-report']='accelerator/showcase/acc_post_report';
$route['accelerator/acc-post-encourage']='accelerator/showcase/acc_post_encourage';
$route['accelerator/showcase-post-action']='accelerator/showcase/showcase_post_action';
$route['accelerator/acc-post-comment-add']='accelerator/showcase/acc_post_comment_add';
$route['accelerator/acc-post-comment-delete']='accelerator/showcase/acc_post_comment_delete';
$route['accelerator/acc-post-comment-more']='accelerator/showcase/acc_post_comment_more';
$route['accelerator/wellness-create']='accelerator/accelerator/wellness_create';
$route['accelerator/showcase-list']='accelerator/showcase/showcase_list';
$route['accelerator/showcase-follow-user']='accelerator/showcase/showcase_follow_user';
$route['accelerator/group']='accelerator/group_chat';
$route['accelerator/group-chat/(:any)']='accelerator/group_chat/begin_group/$1';


/** End Accelerator - Youth **/

/** Begin Accelerator dashboard **/
//Dashboard
$route['dashboard/location/stage']="accelerator/dashboard_accelerator/location_stage";
$route['dashboard-acc-updates-more']="accelerator/dashboard_accelerator/acc_updates_more";
$route['dashboard-acc-updates']="accelerator/dashboard_accelerator/acc_updates";
$route['dashboard-acc-attendance']="accelerator/dashboard_accelerator/acc_attendance";
$route['dashboard-acc-workshop']="accelerator/dashboard_accelerator/acc_workshop";
$route['dashboard-acc-participants']="accelerator/dashboard_accelerator/acc_participants";
$route['dashboard-acc-showcase']="accelerator/dashboard_accelerator/acc_showcase";
$route['dashboard-acc-stages']="accelerator/dashboard_accelerator/acc_stages";
$route['dashboard-acc-myteam']="accelerator/dashboard_accelerator/acc_myteam";
$route['dashboard-acc-messages']="accelerator/dashboard_accelerator/acc_messages";
$route['dashboard-acc-welcome']="accelerator/dashboard_accelerator/acc_welcome";
/** End Accelerator dashboard **/

$route['accelerator/myhub']='accelerator/myhub';
$route['accelerator/competition']='accelerator/competiton';

/******** BEGIN : CollectiveImpacts Roles **********/
$route['mt-admin']='collectiveimapact/cia_list';
$route['mt-admin/add']='collectiveimapact/adduser';
$route['mt-admin/submit-user-invite']='collectiveimapact/submit_user_invite';
$route['mt-admin/ciadmin-edit']='collectiveimapact/ciadmin_edit';
$route['mt-admin/update/(:num)']='collectiveimapact/adminuser_update/$1';
$route['mt-admin/delete']='collectiveimapact/adminuser_delete';
$route['mt-admin/active']='collectiveimapact/adminuser_active';
$route['mt-admin/block-member/(:num)']='collectiveimapact/block_user/$1';
$route['mt-admin/admin-user-invite']='collectiveimapact/adminuser_invite_mail';
$route['mt-admin-emailvalidate']='collectiveimapact/email_validate';
/******** END : CollectiveImpacts Roles **********/

/******** BEGIN : Angel - Admin **********/
$route['admin']='admin/index';
$route['admin/add']='admin/add_admin';
$route['admin/edit-admin']='admin/edit_admin';
$route['admin/update/(:num)']='admin/status_admin/$1';
$route['admin/delete']='admin/check_admin';
$route['admin/block-member/(:num)']='admin/block_admin/$1';
$route['admin-emailvalidate']='admin/email_validate';
$route['admin/admin-invite']='admin/admin_invite_mail';
$route['admin/admin-typelist']='admin/usertype_list';
/******** END : Angel - Admin **********/

/******** BEGIN : Accelerator - store **********/
$route['accelerator/acc-user-invite']='accelerator/user/user_invite_mail';
$route['accelerator/store-information/(:num)']='accelerator/company/store_information/$1';
$route['accelerator/store/add']='accelerator/company/addstore';
$route['member-detail']='accelerator/company/member_detail';
$route['member-list']='accelerator/company/member_list';
$route['accelerator/store/add-user']='accelerator/company/adduser';
$route['city-list']='accelerator/company/city_list';
$route['suburb-list']='accelerator/company/suburb_list';
$route['accelerator/store']='accelerator/company/store';
$route['accelerator/store/delete']='accelerator/company/store_delete';//delete
$route['company/get-edit-popup']='accelerator/company/get_edit_popup';
$route['company/get-delete-popup']='accelerator/company/get_delete_popup';
$route['company/update-store-member']='accelerator/company/update_store_member';
$route['accelerator/store-edit/(:num)']='accelerator/company/store_edit/$1/$2';
/******** END : store  **********/

/******** BEGIN : Accelerator - User **********/
$route['accelerator/user/delete']='accelerator/user/user_delete';//delete
//$route['accelerator/user/add']='accelerator/user/adduser';
$route['accelerator/user/add/(:num)']='accelerator/user/adduser/$1';
$route['accelerator/user/(:num)']='accelerator/user/user_list/$1';
$route['accelerator/user']='accelerator/user/user_list';
$route['accelerator/user-edit']='accelerator/user/user_edit';
$route['accelerator/user-update/(:num)/(:num)']='accelerator/user/user_update/$1/$2';
$route['accelerator/block-member/(:num)']='accelerator/user/block_user/$1';
/*$route['accelerator/unblock-member/(:any)']='accelerator/user/unblock_user/$1';*/
$route['usertype/filter']='accelerator/user/usertype_filter';
$route['user/submit-user-invite']='accelerator/user/submit_user_invite';
$route['accelerator_test']='accelerator/user/email_validate';
/******** END : User  **********/

/******** BEGIN : Accelerator - Wellness **********/
$route['accelerator/wellness/(:num)']='accelerator/wellness/wellness/$1';
$route['accelerator/wellness']='accelerator/wellness/wellness';
$route['accelerator/user-wellness']='accelerator/wellness/participant_wellness';
$route['accelerator/attendance']='accelerator/wellness/attendance';
$route['wellness-filter']='accelerator/wellness/participants_report_list_filter';

/******** END : Accelerator -Wellness  **********/


/******** BEGIN : Accelerator - Transfer **********/
$route['accelerator/transfer/(:num)'] = 'accelerator/transfer/transfer/$1';
$route['accelerator/transfer']= 'accelerator/transfer/transfer';
$route['accelerator/user-transfer']= 'accelerator/transfer/user_transfer';
/******** ENd : Accelerator - Transfer **********/

/******** BEGIN : Accelerator - Reports **********/
$route['report']='report/accelerator/participants_report_list';
$route['overal-report-filter']='report/accelerator/participants_report_list_filter';
$route['reports/accelerator/user/(:num)/(:num)']='report/accelerator/report_export/$1/$2';
$route['reports/accelerator/user/(:num)/(:num)/(:num)']='report/accelerator/report_export_individual/$1/$2/$3';
/******** ENd : Accelerator -  **********/

$route['admin-report']='report/admin_report/admin_report_list';



/******** BEGIN : Accelerator - Participant Reports **********/
$route['accelerator/report']='report/accparticipant/participantreport';
$route['accelerator/report-more']='report/accparticipant/participantreport_list_more';
$route['accelerator/report-filter']='report/accparticipant/report_filter';
/******** ENd : Participant Reports -  **********/
$route['report/userlog-report-month']='report/loginlog_report/userlog_monthly_list';
/******** BEGIN : Accelerator - Level - Reports **********/
$route['report/level-report']='report/level_report/index';
$route['report/level-report-month']='report/level_report/level_monthly_list';
$route['report/level-report/yearly-print']='report/level_report/yearly_print';
$route['report/level-report/monthly-print']='report/level_report/monthly_print';
$route['report/level-report/monthly-yearly-print']='report/level_report/monthly_yearly_print';
/******** ENd   : Accelerator - Level - Reports   **********/

/******** BEGIN : Provider - Reports **********/
$route['report/provider-report-month']='report/provider_report/user_monthly_list';
$route['report/provider-report']='report/provider_report/index';
$route['report/provider-report/yearly-print']='report/provider_report/yearly_print';
$route['report/provider-report/monthly-print']='report/provider_report/monthly_print';
$route['report/provider-report/monthly-yearly-print']='report/provider_report/monthly_yearly_print';


/******** BEGIN : Accelerator - Level - Reports **********/
$route['report/loginlog-report']='report/loginlog_report/index';
$route['report/loginlog-report-month']='report/loginlog_report/loginlog_monthly_list';
$route['report/loginlog-report/yearly-print']='report/loginlog_report/yearly_print';
$route['report/loginlog-report/monthly-print']='report/loginlog_report/monthly_print';
$route['report/loginlog-report/monthly-yearly-print']='report/loginlog_report/monthly_yearly_print';
/******** ENd   : Accelerator - Level - Reports   **********/

//$route['provider-report/report-filter']='report/provider_report/report_filter';
/******** ENd   : Provider - Reports   **********/

/******** BEGIN : Accelerator - Workshop ***********/
$route['accelerator/attention/(:num)']='accelerator/workshop/workshop_attention/$1';

$route['accelerator/modules/workshop-mod-user']='accelerator/workshop/workshop_mod_user';
$route['accelerator/modules/workshop-mod-status']='accelerator/workshop/workshop_mod_status';
$route['accelerator/modules/(:num)']='accelerator/workshop/admin_modules/$1';

$route['accelerator/learning-activity-modal']='accelerator/workshop/learning_activity_modal';
$route['accelerator/learning-result']='accelerator/workshop/learning_result';

$route['accelerator/learning-content']='accelerator/workshop/learning_content';

$route['accelerator/activity-progress']='accelerator/workshop/activity_progress';
$route['accelerator/activity']='accelerator/workshop/activity';
$route['accelerator/learning/(:num)']='accelerator/workshop/learning/$1';
$route['accelerator/workshop']='accelerator/workshop/index';
/******** END : Accelerator - Workshop ***********/

/******** BEGIN : ACCELERATOR REGISTER ***********/
$route['register/(:num)']='auth/user_invite/$1';
/******** END : ACCELERATOR REGISTER ***********/
/********Begin admin-setup **********/
//Auth
$route['logout']='auth/logout';
$route['login']='auth/login';
$route['signup']='auth/signup';
$route['verifymail/(:num)']='auth/mail_verify_code/$1';
$route['verifymail/(:num)/(:any)']='auth/verifymail/$1/$2';
$route['verifycoderesend/(:num)']='auth/mail_verify_code_resend/$1';
$route['signup-complete/(:num)']='auth/signup_complete/$1';
$route['bizsubtype']='auth/bizsubcategory';
$route['cities']='auth/cities';
$route['suburb']='auth/suburb';
$route['change-password']='auth/change_password';
$route['session-details']='auth/get_session_values';
$route['forgot-password']='auth/forgot_password';
$route['reset-password/(:any)']='auth/reset_password/$1';
$route['current-qualification']='auth/current_qualification/';

//Find connection
$route['connection-tag-user'] = 'connection/tag_user';
$route['connection/share-profile'] = 'connection/share_profile';
$route['connection/get-city-filter']='connection/get_city_filter';
$route['connection/get-bizser-filter']='connection/get_bizser_filter';
$route['connection/follow-user']='connection/followUser';
$route['connection/unfollow-user']='connection/unfollowUser';
$route['connection-more']='connection/connection_list_more';
$route['connection']='connection/connection_list';

/****** BEGIN : PROFILE ******/

$route['profile/add-reference']='profile/add_reference';
$route['profile/get-update-reference-detail']='profile/get_update_reference';
$route['profile/update-reference-detail']='profile/update_reference';
$route['profile/delete-reference-detail']='profile/delete_reference';
$route['resume']='resume/resume_template';
$route['resume/resume-title']='resume/resume_title';
$route['resume/delete-contact-email-id']='resume/delete_contact_mail';
$route['resume/delete-contact-number']='resume/delete_contact_number';
$route['resume/update-contact-email-id']='resume/update_contact_mail';
$route['resume/update-contact-number']='resume/update_contact_number';
//$route['resume/resume-title-update']='resume/resume_title_update';

$route['resume/cv-title-update']='resume/resume_title_update';
$route['resume/cv-title-insert']='resume/cv_title_insert';
$route['resume/profile-details']='resume/get_profile_details';
$route['resume/delete-temp']='resume/delete_temp';
$route['generate-pdf']='resume/generate_pdf';
$route['resume/cover-letter']='resume/cover_letter';
$route['resume/cover-letter-preview']='resume/cover_letter_preview';
$route['resume/resume-cover-letter-update']='resume/resume_cl_update';
$route['resume/generate-cv-pdf']='resume/generate_cv_pdf';
$route['resume/generate-resume-pdf']='resume/generate_resume_pdf';
$route['resume-add-gallery-temp']='resume/resume_add_gallery_temp';
$route['resume-delete-gallery-temp']='resume/resume_delete_gallery_temp';

//share profile
$route['profile/share-youth_profile']='profile/get_youth_share_profile_data';
//pdf download
$route['profile/download-as-pdf/(:num)']='profile/download_as_pdf/$1';
//Suggested Connection 
$route['profile/suggested-connection']='profile/suggested_connection';
//profile-cover photo
$route['profile/profile-cover-photo-upload']='profile/profile_cover_photo_upload';
$route['profile/profile-background-photo-upload']='profile/profile_background_photo_upload';

//profile
$route['profile/get-profile']='profile/get_profile';
$route['profile/get-update-basic-info']='profile/get_update_basic_info';
$route['profile/update-basic-info']='profile/update_basic_info';
$route['profile/delete_profile']='profile/delete_profile';
//followers & following
$route['followers']='connection/followers';
$route['followling']='connection/followling';
//location
$route['profile/get-update-location']='profile/get_update_location';
$route['profile/update-location']='profile/update_location';
$route['profile/add-location']='profile/add_location';
//experience
$route['profile/get-update-experience']='profile/get_update_experience';
$route['profile/update-experience']='profile/update_experience';
$route['profile/add-experience']='profile/add_experience';
$route['profile/delete-experience']='profile/delete_experience';

//profile load more for cover image
$route['profile/load-more-coverimg']='profile/load_more_cover_img';

//education
$route['profile/education']='profile/education';
$route['profile/get-update-education']='profile/get_update_education';
$route['profile/update-education']='profile/update_education';
$route['profile/education']='profile/education';
$route['profile/add-education']='profile/add_education';
$route['profile/delete-education']='profile/delete_education';
$route['profile/add-qualify-provider']='profile/add_qualification_provider';
$route['profile/search-qualify-provider']='profile/search_qualify_provider';
//language
$route['profile/add-language']='profile/add_language';
$route['profile/delete-language']='profile/delete_language';
$route['profile/is-language-exist']='profile/is_language_exist';
//quick-links
$route['profile/add-quick-links']='profile/add_quick_links';
$route['profile/delete-quick-links']='profile/delete_quick_links';
//social-links
$route['profile/get-socialmedia']='profile/edit_social_links';
$route['profile/update-social-links']='profile/update_social_links';
$route['profile/add-social-links']='profile/add_social_medial_links';

//wishlist
$route['profile/get-wishlist']='profile/get_wishlist';
$route['profile/add-wishlist']='profile/add_wishlist';
$route['profile/delete-wishlist']='profile/delete_wishlist';
$route['profile/is-wishlist-exists']='profile/is_wishlist_exists';
//volunteering
$route['profile/get-update-volunteering']='profile/get_update_volunteering';
$route['profile/update-volunteering']='profile/update_volunteering';
$route['profile/add-volunteering']='profile/add_volunteering';
$route['profile/delete-volunteering']='profile/delete_volunteering'; 
//cv
$route['profile/cv-export']='profile/export_cv';
$route['profile/usercv-limit']='profile/usercv_limit';
$route['profile/add-usercv']='profile/add_usercv';
$route['profile/delete-usercv']='profile/delete_usercv';
$route['profile/cv-download/(:num)']='profile/cv_download/$1';
//achievements
$route['profile/get-update-achievement']='profile/get_update_achievement';
$route['profile/update-achievement']='profile/update_achievement';
$route['profile/add-achievement']='profile/add_achievement';
$route['profile/delete-achievement']='profile/delete_achievement';
//techinacl skills
$route['profile/get-update-technical-skill']='profile/get_update_technical_skill';
$route['profile/update-technical-skill']='profile/update_technical_skill';
$route['profile/add-technical-skill']='profile/add_technical_skill';
$route['profile/delete-technical-skill']='profile/delete_technical_skill';
//interest
$route['profile/add-interest']='profile/add_interest';
$route['profile/get-update-interest']='profile/get_update_interest';
$route['profile/update-interest']='profile/update_interest';
$route['profile/delete-interest']='profile/delete_interest';
//info
$route['profile/update-profile-info']='profile/update_profile_info';
$route['profile/get-update-teacher-info']='profile/get_update_teacher_info';
$route['profile/update-teacher-info']='profile/update_teacher_info';
$route['profile/get-qualification-provider']='profile/get_qualification_provider';
$route['profile/get-update-admin-info']='profile/get_update_admin_info';
$route['profile/update-admin-info']='profile/update_admin_info';
$route['profile/get-youth-info']='profile/get_youth_info';
//testimonial
$route['profile/send-testimonial']='profile/send_testimonial';
$route['profile/testimonial/(:num)']='profile/testimonial/$1';
$route['testimonial-by/(:num)']='profile/testimonial_by/$1';
$route['profile/delete-testimonial']='profile/delete_testimonial';
$route['profile/update-skills']='profile/update_skills';
//video record
$route['profile/video-view']='profile/video_view';
//privacy
$route['profile/checkcv-data']='profile/checkcv_data';
$route['profile/experience-privacy']='profile/experience_privacy';
$route['profile/education-privacy']='profile/education_privacy';
$route['profile/volunteering-privacy']='profile/volunteering_privacy';
$route['profile/achievements-privacy']='profile/achievements_privacy';
$route['profile/cv-privacy']='profile/cv_privacy';
$route['profile/technical-privacy']='profile/technical_privacy';
$route['profile/interest-privacy']='profile/interest_privacy';
$route['profile/language-privacy']='profile/language_privacy';
$route['profile/testimonial-privacy']='profile/testimonial_privacy';
$route['profile/batch-privacy']='profile/batch_privacy';
$route['profile/skills-privacy']='profile/skills_privacy';
$route['profile/get-qualification']='profile/get_qualification';
$route['profile/get-language']='profile/get_language';
$route['profile/get-city']='profile/get_city';
$route['profile/get-suburb']='profile/get_suburb';
$route['profile/get-industry-subcategory']='profile/get_industry_subcategory';
$route['profile/add-qualification-title']='profile/add_qualification_title';
$route['profile/qualification-title-check']='profile/qualification_title_check';
//share link
$route['profile/(:any)/(:any)']='profile/share_link/$1/$2';
$route['profile/share-url']='profile/share_url_generation';
//main
$route['profile/edit']='profile/edit_profile';
$route['profile/edit-about']='profile/edit_about';
$route['profile/(:num)']='profile/profile_list/$1';
$route['profile']='profile/profile_list/';
/****** END : PROFILE ******/

/****** START : PROFILE  LEVEL UP LINK******/
$route['profile/info']='profile/profile_list/';
$route['profile/wishlist']='profile/profile_list/';
$route['profile/cover-picture']='profile/profile_list/';
$route['profile/profile-picture']='profile/profile_list/';
$route['profile/technical-skills']='profile/profile_list/';
$route['profile/interests']='profile/profile_list/';
$route['profile/languages']='profile/profile_list/';
$route['profile/testimonial']='profile/profile_list/';
$route['profile/work-experience']='profile/profile_list/';
$route['profile/volunteering-experience']='profile/profile_list/';
$route['profile/add-qualifications']='profile/profile_list/';
$route['profile/visual-journey']='profile/profile_list/';
$route['profile/journey-endorse']='profile/profile_list/';
$route['profile/export-cv']='profile/profile_list/';
$route['connection/follow-users']='connection/connection_list/';
$route['create-post']='dashboard/begin_dashboard/';
$route['encourage-other-post']='dashboard/begin_dashboard/';


/****** END : PROFILE  LEVEL UP LINK******/

/****** BEGIN : COMMUNICATION ******/
//Communication
$route['communication/(:num)/(:any)']='communication/communication_view/$1/$2';
$route['communication/activity-more']='communication/activity_more';
$route['communication/add-focus']='communication/add_focus';
$route['communication/focus-status']='communication/focus_status';
$route['communication/get-update-focus']='communication/get_update_focus';
$route['communication/update-focus']='communication/update_focus';
$route['communication/add-note']='communication/add_note';
$route['communication/get-update-note']='communication/get_update_note';
$route['communication/update-note']='communication/update_note';
$route['communication/delete-note']='communication/delete_note';
$route['communication/add-log-activity']='communication/add_log_activity';
$route['communication/get-update-log-activity']='communication/get_update_log_activity';
$route['communication/update-log-activity']='communication/update_log_activity';
$route['communication/delete-log-activity']='communication/delete_log_activity';
$route['communication/add-task']='communication/add_task';
$route['communication/get-update-task']='communication/get_update_task';
$route['communication/update-task']='communication/update_task';
$route['communication/delete-task']='communication/delete_task';
$route['communication/get-profile-info']='communication/get_profile_info';
$route['communication/get-profile-resume']='communication/get_profile_resume';
$route['communication/get-notes']='communication/get_notes';
$route['communication/accept/(:num)/(:any)']='communication/accept/$1/$2';
$route['communication/update-contact']='communication/update_contact';
$route['communication']='communication/communication_list';
$route['communication/list-more']='communication/communication_list_more';
/****** END : COMMUNICATION ******/

//User Code
$route['usercode']='usercode/usercode';

/********End admin-setup **********/

/********Begin beforelogin-pages **********/

//Directory
$route['directory']='connection/connect_list';
$route['directory-more']='connection/connect_list_more';
$route['directory/contact-us/(:num)/(:any)']='connection/contact_us/$1/$2';
$route['directory/(:num)/(:any)']='connection/connect_view/$1/$2';
$route['directory/user-recent-post']='connection/user_recent_post';


//news
$route['news']='home/news';
$route['news/articles']='home/news_articles';
$route['news/the-warehouses-scheme-for-young-unemployed-offered-to-other-industries']='home/news_articals1';
$route['news/Greater-support-for-Rotorua-youth-wanting-to-get-into-the-workplace']='home/news_articals2';
$route['news/Trade-Me-partners-with-Youth-Hub']='home/news_articles3';
$route['news/New-Zealands-LinkedIn-for-Youth-Goes-Mobile']='home/news_articals4';
$route['news/New-partnership-to-provide-social-record-platform-for-young-people']='home/news_articals5';
$route['news/Youth-Hub-Founder-receives-Top-10-honour']='home/news_articals6';
$route['news/Network-for-youth-being-embraced-nationally']='home/news_articals7';
$route['news/Kiwi-Social-Network-Embraced-by-Youth']='home/news_articals8';
$route['news/Professional-networking-site-for-young-people-like-LinkedIn']='home/news_articals9';
$route['news/LinkedIn-for-Youth-Launches-across-New-Zealand']='home/news_articals10';
$route['news/New-project-in-Rotorua-to-connect-youth-community']='home/news_articals11';

$route['about-business']='home/business';
$route['about-us']='home/about_us';
$route['about-organisation']='home/organisation';
//Contact Us
$route['contact-us']='home/contact';
$route['contact-us/mail']='home/send_mail_contact';

//HELPDESK
$route['helpdesk-more']='helpdesk/helpdesk_list_more';
$route['helpdesk/add']='helpdesk/helpdesk_add';
$route['helpdesk/(:any)']='helpdesk/helpdesk_view/$1/$1';
$route['helpdesk/cancel/(:any)']='helpdesk/helpdesk_cancel/$1';
$route['helpdesk/reject/(:any)']='helpdesk/helpdesk_reject/$1';

$route['helpdesk']='helpdesk/helpdesk_list';

$route['reports/destination-effect']='report/destination_effect/destination_effect_list';
$route['reports/destination-effect-status']='report/destination_effect/destination_effect_status';
$route['report/destinationeffect-report-month']='report/destination_effect/destination_effect_monthlylist';
$route['reports/destinationeffects-yearmonth-print']='report/destination_effect/destination_effect_yearmonthlyprint';
$route['reports/destinationeffects-yearmonth-emp-print']='report/destination_effect/destination_effect_emp_yearmonthlyprint';

//REPORT youth-effect
$route['reports/youth-effect']='report/youth_effect/youth_effect_list';
$route['report/youtheffect-report-month']='report/youth_effect/youth_effect_monthlylist';
$route['reports/youtheffects-year-print']='report/youth_effect/youth_effect_yearlyprint';
$route['reports/youtheffects-month-print']='report/youth_effect/youth_effect_monthlyprint';
$route['reports/youtheffects-yearmonth-print']='report/youth_effect/youth_effect_yearmonthlyprint';

//REPORT destination-effect

//Project
$route['project/content-update']='project/project_content_update';
$route['project/content-edit']='project/project_content_edit';
$route['project/delete-discussion']='project/delete_discussion';
$route['project-tag-add']='project/project_tag_add';

$route['project-add-temp']='project/project_add_temp';
//$route['project/project-upload']='project/project_upload';
$route['project/edit/(:any)']='project/project_edit/$1';
$route['project/dislike']='project/project_dislike_add';
$route['project/delete/(:any)']='project/project_delete/$1';
$route['project-like-add']='project/project_like_add';
$route['project-comment-delete']='project/project_comment_delete';
$route['project-comment-add']='project/project_comment_add';
$route['project/add']='project/project_add';
$route['project/temp-content-add']='project/temp_content_add';
$route['project/member-add']='project/member_add';
$route['project/tag-add']='project/tag_add';
$route['project/skill-add']='project/skill_add';
$route['project-more']='project/project_list_more';
$route['project/(:any)']='project/project_view/$1/$1';
$route['project']='project/project_list';
$route['project-delete-gallery-temp']='project/project_delete_gallery_temp';

//notification
$route['notification']='notification/notification_list';
$route['notification/side_notification']='notification/side_notification';
$route['notification-next']='notification/notification_next';
$route['notification-message']='notification/notification_message';
$route['notification/status-update']='notification/notification_staus_update';
$route['notification-read-add']='notification/notification_read_update';


////Graduation////
$route['accelerator/graduation/unit-calculation']='accelerator/graduation/unit_calculation_list';
$route['accelerator/graduation/pdf/(:num)/(:num)']='accelerator/graduation/pdf/$1/$2'; 
$route['accelerator/graduation/status']='accelerator/graduation/graduation_status'; 
$route['accelerator/graduation/(:num)']='accelerator/graduation/graduation_list/$1'; 
////
////Program////
/*Accessories*/
$route['accelerator/accessories-list/tablet-add-update']='accelerator/accessories/accessories_tablet_add_update';
$route['accelerator/accessories-list/uniform-add-update']='accelerator/accessories/accessories_uniform_add_update';
$route['accelerator/accessories-list-intake']='accelerator/accessories/accessories_intake_list';
$route['accelerator/accessories-list']='accelerator/accessories/accessories_list';
$route['accelerator/accessories-uniforms/(:any)']='accelerator/accessories/accessories_lists/$1';
$route['accelerator/accessories-uniform/(:any)']='accelerator/accessories/participant_accessories_uniform_list/$1';
$route['accelerator/accessories-uniform']='accelerator/accessories/participant_accessories_uniform_list';
/*Stages*/
$route['accelerator/stage/promote-accept-location']='accelerator/program/accept_to_preinterview';
$route['accelerator/stage/promote']='accelerator/program/promote_to_preinterview';
$route['accelerator/stage/filter']='accelerator/program/stage_filter';
$route['accelerator/stages_intake']='accelerator/program/stage_intake_list';
$route['accelerator/stages/(:any)']='accelerator/program/stage_list/$1';
$route['accelerator/stages']='accelerator/program/stage_list';
/*Participant*/
$route['accelerator/participants_intake']='accelerator/program/participant_intake_list';
$route['accelerator/participants/(:any)']='accelerator/program/participant_list/$1';
$route['accelerator/participants']='accelerator/program/participant_list';
/*My Team*/
$route['accelerator/my-team-list']='accelerator/program/my_team_intake_list';
$route['accelerator/my-team']='accelerator/program/my_team_list';
/*Programme View*/
$route['accelerator/program/program-notes-delete']='accelerator/program/program_notes_delete';
$route['accelerator/program/program-comment-add']='accelerator/program/program_comment_add';
$route['accelerator/program/program-files-delete']='accelerator/program/program_files_delete';
$route['accelerator/program/program-edit/(:num)']='accelerator/program/program_edit_update/$1';
$route['accelerator/program/program-edit']='accelerator/program/program_edit';
$route['accelerator/program/(:num)']='accelerator/program/program_view/$1';
/*Programme List*/
$route['accelerator/program/program-alert-message']='accelerator/program/program_alert_message';
$route['accelerator/program/program-suggest-date-confirm'] = 'accelerator/program/date_suggest';
$route['accelerator/program/program-alternate-date-suggest'] = 'accelerator/program/program_status_suggest';
$route['accelerator/program/program-date-confirm']='accelerator/program/date_confirm'; 
$route['accelerator/program/program-status-confirm']='accelerator/program/program_status_confirm'; 
$route['accelerator/program/program-status']='accelerator/program/program_status';
$route['accelerator/program/program-memberlist']='accelerator/program/program_more_store_members'; 
$route['accelerator/program']='accelerator/program/program_list'; 
/*Programme Setup*/
$route['accelerator/program/program-delete-temp']='accelerator/program/program_delete_temp'; 
$route['accelerator/program/program-add-temp']='accelerator/program/program_add_temp';
$route['accelerator/program/add-store-new-users']='accelerator/program/add_store_new_users';
$route['accelerator/program/get-store-new-users']='accelerator/program/get_store_new_users';
$route['accelerator/program/get-store-users']='accelerator/program/get_store_users';
$route['accelerator/program/add']='accelerator/program/program_add'; 
////Program

$route['map']='map/index';
$route['map/city/list']='map/map_city_list';

//$route['goal']='goal/goal_list';
//$route['goal-add']='goal/goal_add';
//$route['goal-edit']='goal/goal_edit';


//Dashboard
$route['dashboard/location/stage']="accelerator/dashboard_accelerator/location_stage";

//Event
$route['shadowtech/youth/update']='event/event_shadowtect_youth_update';
$route['shadowtech/youth/view']='event/event_shadowtect_youth_view';
$route['shadowtech/business/edit']='event/event_shadowtect_business_edit';
$route['shadowtech/export/user/(:num)/(:num)/(:num)']='event/event_shadowtech_export/$1/$2/$3';
$route['shadowtech/export/user/(:num)']='event/event_shadowtech_export/$1';
$route['shadowtech/student-delete']='event/event_shadowtech_student_delete';
$route['shadowtech/student-edit']='event/event_shadowtech_student_edit';
$route['shadowtech/student-view']='event/event_shadowtech_student_view';
$route['shadowtech/student-add']='event/event_shadowtech_student_add';
$route['shadowtech/teacher-verify']='event/event_shadowtech_teacher_verify';
$route['shadowtech/teacher-request']='event/event_shadowtech_teacher_request';
$route['shadowtech/student/(:num)']='event/event_shadowtech_student/$1';
$route['shadowtech/student']='event/event_shadowtech_student';
$route['shadowtech/student-register']='event/event_shadowtech_student_register';
$route['shadowtech/business-register']='event/event_shadowtech_business_register';
$route['event/download']="event/event_download";

$route['event/upload/image/delete']='event/event_upload_image_delete';
$route['event/media/delete']='event/event_media_delete';
$route['event/delete/gallery/temp']='event/delete_gallery_temp';
$route['event/upload/gallery/temp']='event/event_upload_gallery_temp';
$route['event/register/status']='event/event_register_status';
$route['event/participant/verification']='event/event_participant_verification';
$route['event/map']='event/event_map';
$route['event/participant/list']='event/event_participant_list';
$route['event/count/status']='event/event_count_status';
$route['event/delete/feedback']='event/event_delete_feedback';
$route['event/video/add']='event/event_video_add';
$route['event/image/add']='event/event_image_add';
$route['event/chat']='event/event_chat';
$route['event/region/list']='event/event_region_list';
$route['event/city/list']='event/event_city_list';
$route['event/cancel']='event/event_cancel';
$route['event/delete']='event/event_delete';
$route['event/edit/(:num)']='event/event_edit/$1';
$route['event/add']='event/events_add';
$route['event/(:num)/(:any)']='event/event_view/$1/$2';
$route['event/(:num)']='event/event_view/$1';
$route['event-more']='event/event_list_more';
$route['event']='event/event_list';
//Youtho
$route['youth/email-check']='users/youth_email_check';
$route['youth/group-filter-more']='users/youth_group_filter_more';

$route['youth/group-angel-list']='users/group_angel_list';
$route['youth/group-youth-list']="users/group_youth_list";
$route['youth/accept-youth-request']='users/accept_youth_request';
$route['youth/accept-pending-youth']='users/accept_pending_youth';
$route['youth/invite-user']='users/youth_invite_user';
$route['youth/engage']='users/youth_engage';
$route['youth/mail']='users/youth_mail';
$route['pending/youth/delete']='users/pending_youth_delete';
$route['pending/youth/edit']='users/pending_youth_edit';
$route['youth/delete']='users/youth_delete';
$route['youth/group-more']='users/youth_group_more';
$route['youth/group/admin/add']='users/youth_group_admin_add';
$route['youth/group/add']='users/youth_group_add';
$route['youth/import/add']='users/youth_import_add';
$route['youth/import/list']='users/youth_import_list';
$route['youth/import']='users/youth_import';
$route['youth/school/list']='users/youth_school_list';
$route['youth/suburb/list']='users/suburb_list';
$route['youth/city/list']='users/city_list';
$route['youth/preferred/city/list']='users/preferred_city_list';
$route['youth/email_check']='users/youth_email_check';
$route['youth/add']='users/youth_add';
$route['youth/update']='users/youth_update';
$route['youth-more']='users/youth_list_more';
$route['youth/youth-grouplist']='users/youth_grouplist';
$route['youth/youth-move']='users/youth_movegroup';
$route['youth']='users/youth_list';

//Business
/*$route['business/delete']='users/business_delete';
$route['business/mail']='users/business_mail';
$route['business/subcategory/list']='users/subcategory_list';
$route['business/suburb/list']='users/suburb_list';
$route['business/city/list']='users/city_list';
$route['business/add']='users/business_add';
$route['business-more']='users/business_list_more';
$route['business']='users/business_list';*/

//Service provider
/*$route['service-provider/delete']='users/serviceprovider_delete';
$route['service-provider/mail']='users/serviceprovider_mail';
$route['service-provider/suburb/list']='users/suburb_list';
$route['service-provider/city/list']='users/city_list';
$route['service-provider/add']='users/serviceprovider_add';
$route['service-provider-more']='users/serviceprovider_list_more';
$route['service-provider']='users/serviceprovider_list';*/

//Teacher
$route['teacher-more']='users/teacher_list_more';
$route['teacher']='users/teacher_list';

//School
$route['school-more']='users/school_list_more';
$route['school']='users/school_list';

//Tertiary
$route['tertiary-more']='users/tertiary_list_more';
$route['tertiary']='users/tertiary_list';

//Pipeline
//$route['accelerator/topstores']='accelerator/pipeline/top_stores';
$route['accelerator/unblock-video-user']='accelerator/pipeline/unblock_video_user';
$route['accelerator/video-filter-user-more']='accelerator/pipeline/video_filter_user_more';
$route['accelerator/video-filter-user']='accelerator/pipeline/video_filter_user';
$route['accelerator/top-store-more']='accelerator/pipeline/top_store_more';
$route['accelerator/topstores']='accelerator/pipeline/topstores';
$route['participant/pipeline/get-user']='accelerator/pipeline/get_user';
$route['participant/pipeline/update-employeement-detail']='accelerator/pipeline/update_employeement_detail';
$route['participant/pipeline/update-emergency-contact']='accelerator/pipeline/update_emergency_contact';
$route['participant/pipeline/add-mentore']='accelerator/pipeline/add_mentore';
$route['participant/pipeline/update-task-status']='accelerator/pipeline/update_task_status';
$route['participant/pipeline/add-task']='accelerator/pipeline/add_task';
$route['participant/pipeline/update-activity']='accelerator/pipeline/update_activity';
$route['participant/pipeline/activity-more']='accelerator/pipeline/activity_more';
$route['participant/pipeline/delete-activity']='accelerator/pipeline/delete_activity';
$route['participant/pipeline/log-activity']='accelerator/pipeline/log_activity';
$route['participant/pipeline/assign-youth']='accelerator/pipeline/assign_youth';
$route['participant/pipeline/get-store-location']='accelerator/pipeline/store_location';
$route['participant/pipeline/status/update']='accelerator/pipeline/pipeline_status_update';
$route['participant/(:num)/(:num)/(:num)']='accelerator/pipeline/pipeline_view/$1/$2/$3';
$route['participant/(:num)/(:num)']='accelerator/pipeline/pipeline_view/$1/$2';
$route['program/pipeline/(:num)']='accelerator/pipeline/pipeline_list/$1';
$route['program/pipeline']='accelerator/pipeline/pipeline_list';

/******** BEGIN : Job **********/
$route['job/map']='job/job_map';
$route['job/apply']='job/job_apply';
$route['job/favourite']='job/job_favourite';
$route['job/myjob/(:num)']='job/job_myjob/$1';
$route['job/myjob']='job/job_myjob';
$route['job/temp']='job/job_temp';

$route['job/delete-job-attachment']='job/job_delete_attachment';
$route['job/edit-job-attachment']='job/job_edit_attachment';
$route['job/edit/(:num)/(:num)']='job/job_edit/$1/$2';
$route['job/edit/(:num)']='job/job_edit/$1';

$route['job/delete-job-temp-attachment']='job/job_delete_temp_attachment';
$route['job/add-job-attachment']='job/job_add_attachment';
$route['job/add/(:num)/(:num)']='job/job_add/$1/$2';
$route['job/add/(:num)']='job/job_add/$1';
$route['job/add']='job/job_add';

$route['job/drafts-more']='job/job_drafts_more';
$route['job/drafts']='job/job_drafts';

$route['job/candidate-update']='job/job_candidate_update';
$route['job/candidates-more']='job/job_candidates_more';
$route['job/candidates']='job/job_candidates';

$route['job/applicant-msg']='job/job_applicant_msg';
$route['job/applicant-save']='job/job_applicant_save';
$route['job/applicant-history']='job/job_applicant_history';
$route['job/applicant-update']='job/job_applicant_update';
$route['job/applicants-more']='job/job_applicants_more';
$route['job/applicants/(:num)']='job/job_applicants/$1';

$route['job/get-cv-list']='job/job_get_cv_list';
$route['job/get-industry-subcategory-list']='job/job_get_industry_subcategory_list';
$route['job/get-suburb-list']='job/job_get_suburb_list';
$route['job/get-city-list']='job/job_get_city_list'; 

$route['job/jobs-search-more']='job/jobs_search_more'; 
$route['job/jobs-search']='job/jobs_search'; 

$route['job/(:num)']='job/job_view/$1';
$route['job-more']='job/job_list_more';
$route['job']='job/job_list';
/******** END : Job **********/

/******** BEGIN : Trademe **********/
//$route['trademe/accounts']='trademe/trademe_accounts';
$route['trademe/account/block']='trademe/trademe_account_block';
$route['trademe/account/(:num)']='trademe/trademe_account_view/$1';
$route['trademe/accounts-more']='trademe/trademe_accounts_more';
$route['trademe/accounts']='trademe/trademe_accounts';

$route['trademe/get-industry-subcategory-list']='trademe/trademe_get_industry_subcategory_list';
$route['trademe/get-suburb-list']='trademe/trademe_get_suburb_list';
$route['trademe/get-city-list']='trademe/trademe_get_city_list'; 
$route['trademe/job-edit/(:num)']='trademe/trademe_job_edit/$1';

$route['trademe/job-status']='trademe/trademe_job_status';
$route['trademe-more']='trademe/trademe_list_more';
$route['trademe']='trademe/trademe_list';
/******** END : Trademe **********/

/******** Begin Explore **********/
$route['explore']='explore/explore_list';
$route['explore/add']='explore/explore_add';
$route['explore/(:num)/(:any)/(:num)']='explore/explore_view/$1/$2/$3';
$route['explore/(:num)/(:num)']='explore/explore_view/$1/$2';
$route['explore/(:num)']='explore/explore_view/$1';
$route['explore/edit/(:num)']='explore/explore_edit/$1';
$route['explore/add-topic/(:num)']='explore/explore_add_topic/$1';
$route['explore/rating']='explore/explore_rating';
$route['explore/share-explore/(:num)']='explore/explore_share/$1';
$route['explore/add-user']='explore/explore_add_user';
$route['explore/delete-user']='explore/explore_delete_user';
$route['explore/content-delete']='explore/explore_delete_content';
$route['explore/add-myexplore']='explore/explore_addmy_explore';
$route['explore/topics/(:num)']='explore/explore_topics_list/$1';
$route['explore/explore-topic-list-more']='explore/explore_topic_list_more';
$route['explore-more']='explore/explore_list_more';
$route['explore/chat']='explore/explore_add_chat';
$route['explore/temp-content-add']='explore/temp_content_add';
$route['explore/explore-upload']='explore/explore_upload';
$route['explore/content-edit']='explore/explore_get_edit_section';
$route['explore/content-update']='explore/content_update';
$route['explore/add-section']='explore/explore_add_section';
$route['explore/temp-content-delete']='explore/temp_content_delete';
$route['explore/delete-discussion']='explore/delete_discussion';
$route['explore/update-user']='explore/explore_update_user';

/******** Begin Group**********/
$route['group']='group/group_list';
$route['group-more']='group/group_list_more';
$route['group/(:num)']='group/group_view/$1';
$route['group/(:num)/(:any)']='group/group_view/$1';
$route['group/edit']='group/group_edit';
$route['group/check-usename']='group/check_usename';
$route['group/get-user-name-list']='group/get_usename';
$route['group/add-user']='group/add_user';
$route['group/update-user']='group/update_user';
$route['group/add-direct-user']='group/add_user_direct';
$route['group/add']='group/group_add';
$route['group-upload']='group/group_upload';
$route['group/temp-content-add']='group/temp_content_add';
$route['group/update-background/(:num)']='group/background_image_update/$1';
$route['group/cove-image-update']='group/cove_image_update';
$route['group/cove-image-delete']='group/temp_content_delete';
$route['group/delete']='group/group_delete';
/******** End Group**********/

/******** Begin Visual Journey20**********/
$route['journey/display-status']='journey/display_status';
$route['journey/temp-content-delete']='journey/temp_content_media_delete';
$route['journey']='journey/journey_list';
$route['journey/journey_edit']='journey/journey_edit';
$route['journey/edit']='journey/journey_update';
$route['journey/add']='journey/journey_add'; 
$route['journey/milestone-add']='journey/milestone_add'; 
$route['journey/milestone-show']='journey/milestone_show';
$route['milestone/milestone-list']='journey/milestone_list';
$route['journey/endorsed_add']='journey/endorsed_add';
$route['journey-upload']='journey/journey_upload';
$route['journey/temp-content-add']='journey/temp_content_add';
$route['journey/content-delete']='journey/journey_delete_content';
$route['journey/content-add']='journey/journey_content_add';
$route['milestone/content-edit']='journey/milstone_content_edit';
$route['milestone/content-update']='journey/milstone_content_update';
$route['milestone/show-popupdata']='journey/milstone_show_popupdata';
$route['journey/journey-delete']='journey/journey_delete';
$route['journey/(:num)']='journey/mail_staus_update/$1';
$route['journey/endorsement/(:any)']='journey/endorsement_update/$1';
$route['journey/milestone-delete']='journey/milestone_delete_post';
/******** End Visual Journey**********/

/********Begin Report**********/
$route['reports/youth-filter']='report/youth/youth_filter';
$route['reports/youth-report-more']='report/youth/youth_more';
$route['reports/youth']='report/youth';
$route['reports/youth-communication-filter']='report/youth/youth_communication_filter';
$route['reports/youth-communication']='report/youth/youth_communication';
$route['reports/youth-communication-more']='report/youth/youth_communication_more';

$route['reports/download_youthcomm']='report/youth/download_youthcomm';
$route['reports/download_youth']='report/youth/download_youthreport';
//$route['reports/youth-communication-effects']='report/youth/download_youthreport';


$route['reports/youth-communication-effects']='report/communication_effect/report_youth_communication';
$route['reports/effects_month_report']='report/communication_effect/report_effect_comm_mothly';
$route['reports/effects_year_report']='report/communication_effect/report_effect_comm_yearly';
$route['reports/effects_month_report_print']='report/communication_effect/print_report_effect_comm_mothly';
$route['reports/effects_year_report_print']='report/communication_effect/print_report_effect_comm_yearly';
$route['reports/effects_year_month_report_print']='report/communication_effect/print_report_effect_comm_yearly_mothly';

$route['year-youth-reports']='report/youth/year_youth_reports';
$route['reports/likes-toper']='report/youth/likes_toper';
$route['reports/chart-youthreport']='report/youth/chart_youthreport';
$route['reports/chart_analysisyouthreport']='report/youth/chart_analysisyouthreport';
$route['reports/graph-level-youth']='report/youth/graph_level_youth';
$route['reports/graph-journey-youth']='report/youth/graph_journey_youth';
$route['reports/overall-reports']='report/youth/overall_reports';
$route['reports/overall-post-reports']='report/youth/overall_post_reports';
$route['reports/top-followers']='report/youth/top_followers';
$route['reports/overall-chat-reports']='report/youth/overall_chat_reports';
$route['reports/top-tags']='report/youth/top_tags';
$route['reports/top-skill']='report/youth/top_skills';
$route['reports/graph-achievements-youth']='report/youth/graph_achievements_youth';
$route['reports/graph-gender-youth']='report/youth/graph_gender_youth';
$route['reports/graph-age-youth']='report/youth/graph_age_youth';
$route['reports/secondary-status']='report/analysis_report/secondary_status';
$route['reports/pathway-report']='report/analysis_report/pathway_report';

$route['reports/graph-age-youth']='report/youth/graph_age_youth';

$route['reports/youth-filter-graph']='report/youth/youth_filter_graph';
//$route['reports/youth-report-graph-more']='report/youth/youth_more';



/********End Report**********/

/********Impact Start**********/
$route['goal/add-steps']='impact/add_steps';
$route['mt-goals']='impact/goal_list';
$route['goal/impact-invite-add-user']='impact/goal_add_user';
$route['goal/impact-task-status-update']='impact/goal_task_status_update';
$route['goal/impact-chat']='impact/goal_chat_add';
$route['goal/completed']='impact/goal_completed';
$route['goal/tasks']='impact/goal_task_list';
$route['goal/task-delete']='impact/task_delete';
$route['impact/(:num)']='impact/goal_mail_view/$1';
$route['impact/code']='impact/impact_code';
$route['mt-goals/goal-list-more']='impact/goal_list_more';

//goal add routes
$route['mt-goals/alltask']='impact/goal_list';
$route['mt-goal/create-stage1']='impact/goal_add';
$route['mt-goal/create-stage1/(:num)']='impact/goal_add_step_one/$1';
$route['mt-goal/create-stage2/(:num)/(:num)']='impact/goal_add_step_two/$1/$2';
$route['mt-goal/create-stage3/preview/(:num)']='impact/goal_add_preview/$1';
$route['mt-goal/(:num)']='impact/goal_view/$1';
$route['mt-goal/check-task-count']='impact/check_task_count';

$route['goal/update-task']='impact/goal_update_task';
$route['goal/goal-edit-task']='impact/goal_edit_task';

// goal groups
$route['mt-group']='Goalgroup/goalgroup_list';
$route['goal/mt-group-more']='Goalgroup/mt_group_more';

/********Impact END**********/


/******** Begin Assessment **********/
$route['accelerator/assessment/']='accelerator/assessment/assessment_page/$1';
$route['accelerator/assessment/(:num)']='accelerator/assessment/assessment_page/$1';
//$route['accelerator/assessment/(:num)']='accelerator/assessment/$2';
$route['accelerator/assessment/quiz']='accelerator/assessment/assessment_quiz';
$route['accelerator/assessment_admin']='accelerator/assessment/assessment_admin';
$route['accelerator/assessment_result']='accelerator/assessment/workshop_assessment';
$route['accelerator/assessment_data']='accelerator/assessment/assessment_data';
$route['accelerator/assessment_admin/navigator_unlock']='accelerator/assessment/navigator_unlock';
$route['accelerator/assessment_skip']='accelerator/assessment/assessment_skip';
$route['accelerator/assessment_admin/workshop_questions']='accelerator/assessment/workshop_questions';
$route['accelerator/assessment_admin/navigator_checklist']='accelerator/assessment/navigator_checklist';
$route['accelerator/assessment_admin/navigator_answer_uncheck']='accelerator/assessment/navigator_answer_uncheck';
$route['accelerator/assessment_admin/navigator_checklist_answer']='accelerator/assessment/navigator_checklist_answer';
$route['accelerator/assessment_admin/navigator_option_uncheck']='accelerator/assessment/navigator_option_uncheck';
$route['accelerator/assessment_admin/navigator_workshop_unlock']='accelerator/assessment/navigator_workshop_unlock';
$route['accelerator/assessment_admin/navigator_workshop_lock']='accelerator/assessment/navigator_workshop_lock';
$route['accelerator/assessment_admin/navigator_verification']='accelerator/assessment/navigator_verification';
$route['accelerator/assessment/wellness_feedback']='accelerator/assessment/wellness_feedback_data';
$route['accelerator/workshop_review']='accelerator/assessment/workshop_review';
$route['accelerator/workshop_percentage']='accelerator/assessment/workshop_percentage';
$route['accelerator/workshop_unit_standard']='accelerator/assessment/workshop_unit_standard';
$route['assessment-add-gallery-temp']='accelerator/assessment/assessment_add_gallery_temp';
$route['assessment-delete-gallery-temp']='accelerator/assessment/assessment_delete_gallery_temp';
$route['accelerator/assessment/workshop_unit_standard_count']='accelerator/assessment/workshop_unit_standard_count';
$route['accelerator/assessment_previous_answers']='accelerator/assessment/assessment_previous_answers';
//$route['accelerator/assessment/query-check']='accelerator/assessment/query_check';
/******** End Assessment Muthuselvi**********/

/******** Begin Attendance **********/
$route['accelerator/attendance/(:num)']='accelerator/attendance/attendance_list/$1';
$route['accelerator/attendance-add']='accelerator/attendance/attendance_add';
$route['accelerator/attendance-getcount']='accelerator/attendance/attendance_getcount';
$route['accelerator/timeline']='accelerator/attendance/attendance_view_timeline';
$route['pipeline-attendancelist']='accelerator/attendance/pipeline_attendancelist';
$route['accelerator/attendance-add-pipeline']='accelerator/attendance/attendance_add';
$route['accelerator/attendance-add-notes']='accelerator/attendance/attendance_add';
//$route['accelerator/attendance']="accelerator/attendance/attendance";

//Accelerator profile points show

//$route['accelerator/profile']='accelerator/Profile/profile_list';
$route['profile/accelerator-load']='accelerator/Profile/profile_show_progress';

/******** Setup Status List Data**********/
$route['setup/priority-status']='status/priority_status';
$route['setup/helpdesk-status']='status/helpdesk_status';
$route['setup/applicant-status']='status/job_applicant';
$route['setup/intended-destination']='status/intended_destination';
$route['setup-status/more']='status/status_more';
$route['setup-status/update']='status/update_status';
$route['setup-status/edit']='status/edit_status';
$route['setup-status/delete']='status/delete_status';
$route['setup-status/add']='status/add_status';
$route['setup/secondary-status']='status/secondary_status';
$route['setup/primary-status']='status/primary_status';


/******** Question List Data**********/
$route['setup-question/status']='question/status_option';
$route['setup-question/update']='question/update_question';
$route['setup-question/edit']='question/edit_question';
$route['setup-question/delete']='question/delete_question';
$route['setup-question/add']='question/question_add';
$route['setup-question-list/search']='question/question_search';
$route['setup/question']='question/question_list';

/******** Accelartor /group/ **********/
$route['accelerator/group/follow_youth']='accelerator/group_chat/follow_youth';

/******** Goal/youth-goal-list **********/

/*****Static Routes*****/
/*********/
$route['goal/youth-goal-search-more']='impact/youth_goal_search_more';
$route['goal/youth-goal-more']='impact/youth_goal_more';
$route['goal/youth-goal-search']='impact/youth_goal_search';
$route['mt-youth']='impact/youth_goal_list';
$route['goal/youth-goal-list']='impact/youth_goal_list';
$route['goal/goal-updates-more']='impact/goal_updates_more';
/******** End Attendance **********/

/******************** Cron ********************/
$route['schedule/call-1']='schedule/interview_reminder_1'; //every morning 9AM
$route['schedule/call-2']='schedule/interview_reminder_2'; //every morning 9.30AM
$route['schedule/call-3']='schedule/chat_reminder_1'; //every morning 6AM
$route['schedule/call-4']='schedule/impact_goal_reminder_1'; //every morning 10AM

$route['schedule/call-5']='schedule/job_reminder_1'; //every morning 11AM
$route['schedule/call-6']='schedule/job_reminder_2'; //
$route['schedule/call-7']='schedule/job_applicant_reminder_1'; //every evening 5 Pm

$route['schedule/call-8']='schedule/journey_reminder_1';
$route['schedule/call-9']='schedule/before_threeweek_start';
$route['schedule/call-10']='schedule/acc_group_chat_reminder_1';

//pipeline Email
$route['schedule/call-11']='schedule/weekly_mail_report';
$route['schedule/call-12']='schedule/overall_topyouth';

//Block Word Auto run links 
$route['schedule/call-13']='schedule/get_explore_block_list';
$route['schedule/call-14']='schedule/get_event_block_list';
$route['schedule/call-15']='schedule/get_job_block_list';
$route['schedule/call-16']='schedule/get_post_block_list';
$route['schedule/call-17']='schedule/get_chat_block_list';
$route['schedule/call-18']='schedule/get_journey_block_list';
$route['schedule/call-19']='schedule/get_user_about_block_list';



/******************** Block Word ********************/
$route['system-block-word']='block_word';
$route['blockword-more']='block_word/blockword_more';
$route['remove-blockword-explore']='block_word/remove_blockword_explore';
$route['blockword-resolve']='block_word/blockword_resolve';
$route['blockword-sendmail']='block_word/blockword_sendmail';


/******************** End Block Word ********************/


/******************** Level Up ********************/
$route['levelup/claim-badge']='levelup/claim_badge';
$route['levelup/attempt-badge']='levelup/attempt_badge';
$route['levelup']='levelup/index';

/******************** Exam / Assessment ********************/
//Youth
$route['assessment/delete-media']='accelerator/exam/delete_media_temp';
$route['assessment/add-media']='accelerator/exam/add_media_temp';
$route['assessment/load-answer']='accelerator/exam/load_answer';
$route['assessment/submit-question']='accelerator/exam/submit_question';
$route['assessment/load-question']='accelerator/exam/load_question';
$route['accelerator/asmtws/(:num)']='accelerator/exam/workshop/$1';
//Admin
$route['adm-assessment/submit-paper-workshop']='accelerator/exam/adm_submit_paper_workshop';
$route['adm-assessment/verify-paper-workshop']='accelerator/exam/adm_verify_paper_workshop';
$route['adm-assessment/load-paper']='accelerator/exam/adm_load_paper';
$route['adm-assessment/submit-checklist']='accelerator/exam/adm_submit_checklist';
$route['adm-assessment/verify-assessment']='accelerator/exam/adm_verify_assessment';
$route['adm-assessment/load-assessment']='accelerator/exam/adm_load_assessment';
$route['adm-assessment/load-workshop']='accelerator/exam/adm_load_workshop';
$route['adm-assessment']='accelerator/exam/adm_assessment';

$route['404_override']='Error404';
$route['translate_uri_dashes']=FALSE;
?>
