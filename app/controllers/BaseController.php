<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);

            // Pass through with information flash messages
            if(Session::get('message'))
                $this->layout->message = Session::get('message');

            // Pass through with error flash messages
            if(Session::get('errMessage'))
                $this->layout->errMessage = Session::get('errMessage');

		}
	}

}
