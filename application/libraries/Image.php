<?php
if (!defined('BASEPATH')) exit('No direct script access permitted.');

class Image
{
  var $CI;
  function My_image()
  {
  }  
  
  function resize_crop($config, $final_width, $final_height)
  {
    if ($config)
    {
      $CI =& get_instance();
      $CI->load->library('image_lib');
      $file = $config['source_image'];
      list($width, $height, $type, $attr) = getimagesize($file);

      $image_width = $width;
      $image_height = $height;
      $image_type = $type;
 
      $scale = 1;
      
      $x = $final_width/$image_width;
      $y = $final_height/$image_height;
       
      if($x < $y)
      {
        $new_width = round($image_width *($final_height/$image_height));
        $new_height = $final_height;
      }
      else
      {
        $new_height = round($image_height *($final_width/$image_width));
        $new_width = $final_width;
      }
      
      $to_crop_left = ($new_width - ($final_width *$scale))/2;
      $to_crop_top = ($new_height - ($final_height *$scale))/2;
      
      $config['image_library'] = 'GD2';
      $config['source_image'] = $file;
      $config['width'] = $final_width;
      $config['height'] = $final_height;
      $config['x_axis'] = $to_crop_left;
      $config['y_axis'] = $to_crop_top;
      $config['maintain_ratio'] = false;
      
      $CI->image_lib->clear();
      $CI->image_lib->initialize($config);
      $CI->image_lib->crop();
      
      return $config['new_image'];
    }
    return FALSE;
  }
}

?>