<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();


//CAgent::AddAgent("searchAgent()");
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
		$date1=date('j.m.Y H:i:s', strtotime('-24 hours'));
		$date2=date('j.m.Y H:i:s');
        

        $arFilter = array(
            'ID',
            'LOGIN',
            'DATE_REGISTER_1' => $date1,
            'DATE_REGISTER_2' => $date2,
        );
        $Res = CUser::GetList($by = 'ID', $order = 'ASC', $arFilter);

        CEvent::Send("EMAIL_USERS",'s1',$Res);
		
		
	}
?>