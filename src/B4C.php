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


function formtext($name,$label,$value,$attributes) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	return $string = '<div class="form-group form-group-default"><label for="'.$name.'">'.$label.'</label><input type="text" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$class.$att.' ></div>';
}

function formswitch($name,$label,$value) {
	$check = ($value == 1)? 'checked' : '';
	return $string = '<div class="form-group"><label>'.$label.'</label><div class="controls"><span class="label-switch"><input type="checkbox" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$check.' ></span></div></div>';
}


function formcheck($name,$label,$value) {
	return $string = '<div class="form-group form-group-default"><label for="'.$name.'">'.$label.'</label><input type="text" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$class.$att.' ></div>';
}

function formselect($name,$label,$value,$options,$first,$attributes) {
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
	return $string = '<div class="form-group form-group-default"><label for="'.$name.'">'.$label.'</label><select name="'.$name.'" id="'.$name.'" '.$class.$att.' >'.$option_list.'</select></div>';
}

function formfile($name,$label,$attributes) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	return $string = '<div class="form-group form-group-default"><label for="'.$name.'">'.$label.'</label><input type="file" name="'.$name.'" id="'.$name.'" '.$class.$att.' ></div>';
}
	

function formtextarea($name,$label,$value,$attributes) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	return $string = '<div class="form-group form-group-default"><label for="'.$name.'">'.$label.'</label><div class="controls"><textarea name="'.$name.'" id="'.$name.'" '.$class.$att.' >'.$value.'</textarea></div>';
}


function formtextswitch($name,$label,$value,$attributes,$switch_name,$switch_value) {
	$class = 'class="form-control '.$this->css_attributes($attributes);
	$att = $this->attributes($attributes);
	return $string = '<div class="form-group form-group-default"><label for="'.$name.'">'.$label.'<span class="label-switch float-right" style="position: absolute; right: 5px;"><input type="checkbox" value="1" name="sell" checked=""></span></label><input type="text" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$class.$att.' ></div>';
}

}
