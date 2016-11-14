<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "collect".
 *
 * @property integer $id
 * @property string $title
 * @property string $area
 * @property string $attribute
 * @property string $size
 * @property string $direction
 * @property string $rule
 * @property string $floor
 * @property string $subway
 * @property string $method
 * @property string $price
 * @property string $time
 * @property string $visit
 * @property string $img
 */
class Collect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['time'], 'safe'],
            [['title', 'area', 'attribute', 'size', 'direction', 'rule', 'floor', 'subway', 'method', 'visit', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'area' => 'Area',
            'attribute' => 'Attribute',
            'size' => 'Size',
            'direction' => 'Direction',
            'rule' => 'Rule',
            'floor' => 'Floor',
            'subway' => 'Subway',
            'method' => 'Method',
            'price' => 'Price',
            'time' => 'Time',
            'visit' => 'Visit',
            'img' => 'Img',
        ];
    }

    /**
    *
    *
    *@XIA
    *@return:
    */
    public function Houseadd($data){
        $request=Yii::$app->request;
        $data['time'] = date("Y-m-d")."更新";
        $res=Yii::$app->db->createCommand()->insert('collect',$data)->execute();
        if ($res) {
            return 1;
        }else{
            return 0;
        }
    }
    /**
*搜索分页封装模型类
*
*@accept:页数，搜索条件
*@XIA
*@return:搜索分页后的数据 array
*/

    public function p($data){
        //传过来的页数
        $p = $data['p']==0 ? 1:$data['p'];

        $where[] = '1=1';
        //关键字
        if (!empty($data['keyword'])) {
            $where[] = ' title like "%'.$data['keyword'].'%" or
                         area like "%'.$data['keyword'].'%" or
                         attribute like "%'.$data['keyword'].'%" or
                         direction like "%'.$data['keyword'].'%" or
                         rule like "%'.$data['keyword'].'%" or
                         floor like "%'.$data['keyword'].'%" or
                         subway like "%'.$data['keyword'].'%" or
                         method like "%'.$data['keyword'].'%" or
                         time like "%'.$data['keyword'].'%" or
                         size like "%'.$data['keyword'].'%"';
        }
        //非关键字
        if (!empty($data['unkeyword'])) {
            $where[] = ' title not like "%'.$data['unkeyword'].'%"'; 
        }
        //最小价格
        if (!empty($data['start_price'])) {
            $where[] = 'price >='.$data['start_price'];
        }
        //最大价格
        if (!empty($data['end_price'])) {
            $where[] = 'price <='.$data['end_price'];
        }
        //用and连接条件
        $sql = implode(' AND ',$where);

            //求得数据总条数
            $sql_count = "select * from collect where ".$sql."";
            $query_count = Collect::findBySql($sql_count)->asArray()->all();
            $count = count($query_count);
            // return $count;die;

        //自定义每页显示的条数
        $num = 3;
        //求得当前页数从第几条数据开始
        $limit = ($data['p']-1)*$num;
        $limit = $limit < 1 ? 1 : $limit;

        $sql_data = "select * from collect where ".$sql." limit ".$limit.",".$num."";

        //拼接where 和 limit 后的sql语句
        $query = Collect::findBySql($sql_data)->asArray()->all();

        //总页数
        $pages = ceil($count/$num);
        //尾页
        $last = $pages;

        //上一页
        $prev = $p < 1 ? 1:$p-1;
        //下一页
        $next = $p >= $pages ? $pages : $p+1;
        //首页
        $first = 1;
        //拼接页码
        $str = "<a href='javascript:page($first)'>首页</a><a href='javascript:page($prev)'>上一页</a>当前第".$p."页<a href='javascript:page($next)'>下一页</a><a href='javascript:page($last)'>尾页</a>共".$pages."页".$count."条记录</a>";

        $result = array();
        $result['data'] = $query;
        $result['pages'] = $str;
        return $result;
    }
}
