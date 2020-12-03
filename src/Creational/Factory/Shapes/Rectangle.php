<?php 

namespace Patterns\Creational\Factory\Shapes;

use Patterns\Creational\Factory\Interfaces\ShapeInterface;

class Rectangle implements ShapeInterface 
{
	public function draw(){
		$img = imagecreatetruecolor(400, 400);
		$bg = imagecolorallocate($img, 255, 255, 100);
		imagefill($img, 0, 0, $bg);
		$color = imagecolorallocate($img, 0, 0, 0);
		imagerectangle($img, 10, 10, 390, 390, $color);
		imagepng($img, './rectangle.png');
		imagedestroy($img);
	}
}