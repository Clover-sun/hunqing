<?php
namespace app\admin\validate;
use think\Validate;
class User extends Validate
{
    // 测试完成后放开完整规则
     protected $rule =   [
         'signName'                  =>  'require|chs|max:30',
         'showName'                  =>  'require|chs|max:30',
         'merchantType'              =>  'require|alpha|max:20',
         'industryTypeCode'          =>  'require|number|max:3',
         'legalPerson'               =>  'require|chs|max:5',
         'legalPersonID'             =>  'require|number|max:18|unique:register',
         'orgNum'                    =>  'require|max:15',
         'businessLicense'           =>  'require|number|max:15|unique:register',
         'regionCode'                =>  'require|number|max:6',
         'address'                   =>  'require|max:35',
         'linkman'                   =>  'require|chs|max:5',
         'linkPhone'                 =>  'require|regex:[1][3,4,5,7,8][0-9]{9}|unique:register',
         'email'                     =>  'require|email|unique:register',
         'bankCode'                  =>  'require|number|max:12',
         'accountName'               =>  'require|chs|max:5',
         'accountNo'                 =>  'require|number|max:25',
         'settleBankType'            =>  'require|alpha|max:10',
         'settlementPeriod'          =>  'require|max:5',
         'settlementMode'            =>  'require|alpha|max:10',
         'merchantCategory'          =>  'require|regex:/^[A-Za-z0-9\_]+$/|max:40',
         'value'                     =>  'require|float',
     ];
     // 提示信息
     protected $message  =   [
         'signName.require'          =>  '商户签约名必须',
         'signName.chs'              =>  '商户签约名必须是汉字',
         'signName.max'              =>  '商户签约名最多不能超过30个字符',
         'showName.require'          =>  '展示名必须',
         'showName.chs'              =>  '展示名必须是汉字',
         'showName.max'              =>  '展示名最多不能超过30个字符',
         'merchantType.require'      =>  '商户类型必须',
         'merchantType.alpha'        =>  '商户类型必须是字母',
         'merchantType.max'          =>  '商户类型最多不能超过20个字符',
         'industryTypeCode.require'  =>  '行业类型必须',
         'industryTypeCode.number'   =>  '行业类型必须是数字',
         'industryTypeCode.max'      =>  '行业类型最多不能超过3个字符',
         'legalPerson.require'       =>  '法人名字必须',
         'legalPerson.chs'           =>  '法人名字必须是汉字',
         'legalPerson.max'           =>  '法人名字最多不能超过5个字符',
         'legalPersonID.require'     =>  '法人身份证必须',
         'legalPersonID.number'      =>  '法人身份证必须是數字',
         'legalPersonID.max'         =>  '法人身份证最多不能超过18个字符',
         'legalPersonID.unique'      =>  '法人身份证重复',
         'orgNum.require'            =>  '组织机构代码必须',
         'orgNum.max'                =>  '组织机构代码最多不能超过15个字符',
         'businessLicense.require'   =>  '营业执照号必须',
         'businessLicense.number'    =>  '营业执照号必须是数字',
         'businessLicense.max'       =>  '营业执照号最多不能超过15个字符',
         'businessLicense.unique'    =>  '营业执照号重复',
         'regionCode.require'        =>  '区县编码必须',
         'regionCode.number'         =>  '区县编码必须是数字',
         'regionCode.max'            =>  '区县编码最多不能超过6个字符',
         'address.require'           =>  '通讯地址必须',
         'address.max'               =>  '通讯地址不能超过35个字符',
         'linkman.require'           =>  '联系人必须',
         'linkman.chs'               =>  '联系人必须是汉字',
         'linkman.max'               =>  '联系人最多不能超过5个字符',
         'linkPhone.require'         =>  '联系电话必须',
         'linkPhone.regex'           =>  '联系电话格式不正确',
         'linkPhone.unique'          =>  '联系电话重复',
         'email.require'             =>  '邮箱必须',
         'email'                     =>  '邮箱格式错误',
         'email.unique'              =>  '邮箱重复',
         'bankCode.require'          =>  '结算卡联行号必须',
         'bankCode.number'           =>  '结算卡联行号必须是数字',
         'bankCode.max'              =>  '结算卡联行号必须是12位',
         'accountName.require'       =>  '开户名称必须',
         'accountName.chs'           =>  '开户名称必须是汉字',
         'accountName.max'           =>  '开户名称最多不能超过5个字符',
         'accountNo.require'         =>  '开户账号必须',
         'accountNo.number'          =>  '开户账号必须是数字',
         'accountNo.max'             =>  '开户账号最多不能超过25个字符',
         'settleBankType.require'    =>  '结算卡类型必须',
         'settleBankType.alpha'      =>  '结算卡类型必须是字母',
         'settleBankType.max'        =>  '结算卡类型最多不能超过10个字符',
         'settlementPeriod.require'  =>  '结算类型必须',
         'settlementPeriod.max'      =>  '结算类型最多不能超过5个字符',
         'settlementMode.require'    =>  '结算方式必须',
         'settlementMode.alpha'      =>  '结算方式必须是字母',
         'settlementMode.max'        =>  '结算方式最多不能超过10个字符',
         'merchantCategory.require'  =>  '经营类别必须',
         'merchantCategory.regex'    =>   '经营类别只允许字母和下划线',
         'merchantCategory.max'      =>  '经营类别最多不能超过40个字符',
         'value.require'             =>  '费率必须',
         'value.float'               =>  '费率必须小数',
     ];
}