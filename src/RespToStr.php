<?php

namespace RspStr;

class RespToStr
{
    public static function toString($condition)
    {
        //解析代码
        $statment = "";
        foreach ($condition as $id=>$item)
        {
            if (isset($item[0]) && isset($item[1]) && isset($item[2]) && isset($item[3]))
            {
                $statment_return = "return response()->json(['code'=>'".$item[2]."','msg'=>".$item[3].",'data'=>'".$item[4]."']);";

                //判断条件
                switch ($item[0])
                {
                    case 'if':
                        $statment = $statment.'if('.$item[1].'){'.$statment_return.'}';
                        break;
                    case  "if else":
                        $statment = $statment.'else if('.$item[1].'){'.$statment_return.'}';
                        break;
                    case 'else':
                        $statment = $statment.'else{'.$statment_return.'}';
                        break;
                }
            }
        }
        return $statment;
    }
}