<?php
namespace app\Enums;

enum TableLocation: string 
{
    case Front = 'Front';
    case Inside = 'Onside';
    case Outside = 'Outside';    
}