<?php
namespace app\Enums;

enum TableStatus: string 
{
    case Pending = 'pending';
    case Avaliable = 'avaliable';
    case Unavaliable = 'unavaliable';
    
}