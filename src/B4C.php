<?php

namespace Maksuco\B4C;

class B4C
{
	
function attributes($attributes) {
	$att = '';
	foreach($attributes as $key => $key_value) {
		if($key != 'class'){
			$att = $att.$key.'='.'"'.$key_value.'" ';
		}
	}
	return $att;
}

function css_attributes($attributes) {
	$class = '';
	foreach($attributes as $key => $key_value) {
		if($key == 'class'){
			$class = $class.$key_value.' ';
		}
	}
	return $class.'" ';
}


function text($name,$label,$value,$attributes,$extra,$version) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	return $string = '<div class="form-group '.$version.'"><label for="'.$name.'">'.$label.'</label><input type="text" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$class.$att.' '.$extra.' ></div>';
}

function select($name,$label,$value,$options,$first,$attributes,$extra,$version) {
	$option_list = '';
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	if($first) {
		$option_list = '<option disabled selected>'.$first.'</option>';
	}
	if(array() === $options) {
		foreach($options as $key => $key_name) {
			$selected = ($value == $key)? 'selected' : '';
			$option_list = $option_list.'<option value="'.$key.'" '.$selected.' >'.$key_name.'</option>';
		}
	} else {
		foreach($options as $key) {
			$selected = ($value == $key)? 'selected' : '';
			$option_list = $option_list.'<option value="'.$key.'" '.$selected.' >'.$key.'</option>';
		}
	}
	return $string = '<div class="form-group '.$version.'"><label for="'.$name.'">'.$label.'</label><select name="'.$name.'" id="'.$name.'" '.$class.$att.' >'.$option_list.'</select></div>';
}

function file($name,$label,$attributes,$extra,$version) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	return $string = '<div class="form-group '.$version.'"><label for="'.$name.'">'.$label.'</label><input type="file" name="'.$name.'" id="'.$name.'" '.$class.$att.' '.$extra.' ></div>';
}
	

function textarea($name,$label,$value,$attributes,$version) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	return $string = '<div class="form-group '.$version.'"><label for="'.$name.'">'.$label.'</label><div class="controls"><textarea name="'.$name.'" id="'.$name.'" '.$class.$att.' >'.$value.'</textarea></div></div>';
}


function textswitch($name,$label,$value,$attributes,$switch_name,$switch_value) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	$check = ($switch_value == 1)? 'checked' : '';
	return $string = '<div class="form-group form-group-default"><label for="'.$name.'">'.$label.'<span class="label-switch float-right" style="position: absolute; right: 5px;"><input type="checkbox" value="1" name="'.$switch_name.'" '.$check.' ></span></label><input type="text" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$class.$att.' ></div>';
}

function switch($name,$label,$value,$extra) {
	$check = ($value == 1)? 'checked' : '';
	return $string = '<div class="form-group"><label>'.$label.'</label><div class="controls"><span class="label-switch"><input type="checkbox" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$extra.' '.$check.' ></span></div></div>';
}


function checkbox($name,$label,$value,$extra) {
	$check = ($value == 1)? 'checked' : '';
	return '<label class="custom-control custom-checkbox"><input id="'.$name.'" name="'.$name.'" type="checkbox" class="custom-control-input" '.$extra.' '.$check.'><span class="custom-control-indicator"></span><span class="custom-control-description mt-5">'.$label.'</span></label>';
}


function radio($name,$label,$value,$extra) {
	$check = ($value == 1)? 'checked' : '';
	return '<label class="custom-control custom-radio"><input id="'.$name.'" name="'.$name.'" type="radio" class="custom-control-input" '.$extra.' '.$check.'><span class="custom-control-indicator"></span><span class="custom-control-description mt-5">'.$label.'</span></label>';
}

}
