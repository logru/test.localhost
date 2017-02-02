<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

AddEventHandler("main","OnBeforeUserRegister","BeforeReg");
AddEventHandler("main", "OnAfterUserRegister", "yandexblock");

function BeforeReg(&$arFields)
{
	
	if (isset($arFields['EMAIL']))
	{
		$ss = strstr($arFields['EMAIL'],'@');
		$s = mb_strtolower($ss);
		if($s == '@mail.ru' || $s == '@list.ru')
		{
			
			global $APPLICATION;
			$APPLICATION->ThrowException('this email is useless, you need a different email'); 
			return false;
			
		}
	}
}

 function yandexblock(&$arFields)
    {
		if (isset($arFields['EMAIL']))
	{
		$s = strstr($arFields['EMAIL'],'@');
		if($s != '@yandex.ru')
		{
			$m = 'email send';
            $arEventFields = array(
                "ID" => 's1',
                "MESSAGE" => $m,
                "EMAIL_TO" => implode(",", $arFields['EMAIL']),
            );
            CEvent::Send("EMAIL_SEND_REG", 's1', $arEventFields);
            }
        else{
			global $APPLICATION;
			$APPLICATION->ThrowException('yandex.ru do not send'); 
			return false;
        }
			
			
			
		}
	}
        
    
	
	function searchAgent()
	{
		
		
		
	}
?>