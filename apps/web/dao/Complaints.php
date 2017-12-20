<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 16:17:29
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 16:18:52
 */
namespace WDAO;

class Complaints extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'Complaints'));
    }

    public function uploadComplaintImg($content='',$path_dir='')
    {
        $filename = uniqid().'.jpg';/*临时文件名*/

        /*这里是转码 Unicode转Native*/
        $param2 = str_replace(" ","+",$content);
        $param2 = str_replace("%2F","/",$param2);
        $param2 = str_replace("%2B","+",$param2);
        $param2 = str_replace("%0A","",$param2);

        $content = base64_decode($param2); // 将格式为base64的字符串解码

        /*如果文件写入成功*/
        if(!is_dir($path_dir)){
            $res = mkdir($path_dir,0777,true);
            if(!$res){
                return -1;/*图片目录创建失败*/
            }
        }
        if(!empty($content)){
            if (file_put_contents($path_dir.$filename, $content))
            {
                $imageInfo = getimagesize ($path_dir.$filename);/*验证图片*/
                if ($imageInfo == false) {
                    unlink($path_dir.$filename);
                    $this->exportData( array('msg'=>'非法上传'),0);
                }
                \Swoole\Image::thumbnail($path_dir.$filename,
                            $path_dir.'/cp_'.$filename,
                            500,/*图片宽*/
                            500,/*图片高*/
                            1000);
                unlink($path_dir.$filename);
                return $path_dir.'/cp_'.$filename;

            }else{
                return -2;/*图片写入失败*/
            }
        }

    }

}