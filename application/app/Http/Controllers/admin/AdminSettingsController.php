<?php /**
    *
    * Copyright (c) 2019
    * @package VMS - Video CMS v1.0
    * @author Igor Karpov <ika@noxls.net>
    * @author Sergey Karpov
    * @website https://noxls.net
    *
*/?>
<?php

use \Redirect as Redirect;
use \App\Models\Setting;

class AdminSettingsController extends \AdminBaseController {

	public function index()
	{

		$data = array(
			'admin_user' => Auth::user(),
			'settings' => Setting::first(),
			);
		return View::make('admin.settings.index', $data);
	}

	public function save_settings(){

		$input = Input::all();
		$settings = Setting::first();

		$demo_mode = Input::get('demo_mode');
		$enable_https = Input::get('enable_https');
		$free_registration = Input::get('free_registration');
		$activation_email = Input::get('activation_email');
		$premium_upgrade = Input::get('premium_upgrade');
		$locale = Input::get('locale');
		$enable_video_comments = Input::get('enable_video_comments');
		$enable_post_comments = Input::get('enable_post_comments');


		if(empty($demo_mode)){
			$input['demo_mode'] = 0;
		}
        if(empty($enable_video_comments)){
			$input['enable_video_comments'] = 0;
		}
        if(empty($enable_post_comments)){
			$input['enable_post_comments'] = 0;
		}
        if(empty($locale)){
			$input['locale'] = null;
		}

		if(empty($enable_https)){
			$input['enable_https'] = 0;
		}

		if(empty($free_registration)){
			$input['free_registration'] = 0;
		}

		if(empty($activation_email)){
			$input['activation_email'] = 0;
		}

		if(empty($premium_upgrade)){
			$input['premium_upgrade'] = 0;
		}

		if(Input::hasFile('logo')){
        	$input['logo'] = ImageHandler::uploadImage(Input::file('logo'), 'settings');
        }
        else {
            $input['logo'] = $settings->logo;
        }

        if(Input::hasFile('favicon')){
        	$input['favicon'] = ImageHandler::uploadImage(Input::file('favicon'), 'settings');
        }
        else {
            $input['favicon'] = $settings->favicon;
        }

        $settings->update($input);

        return Redirect::to('admin/settings')->with(array('note' => _i('Successfully Updated Site Settings!'), 'note_type' => 'success') );

	}

}