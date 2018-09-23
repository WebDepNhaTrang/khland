<?php
/*
 * @select: string
 * @order_col: string
 * @order_by: asc/desc
 */
if(! function_exists('getAllBanners')){
    function getAllBanners($select='*', $order_col, $order_by="asc"){
        $item = App\Banner::select($select)
                ->orderBy($order_col, $order_by)
                ->get();
        return $item;
    }
}

/*
 * @type: buy/rent
 * @select: string
 * @order_col: string
 * @order_by: asc/desc
 * @paginate: number
 */
if(! function_exists('getAllLands')){
    function getAllLands($type, $select='*', $order_col, $order_by="asc", $paginate = 3){
        $item = App\Land::select($select)
                ->where('type',$type)
                ->orderBy($order_col, $order_by)
                ->paginate($paginate);
        return $item;
    }
}

if(! function_exists('shorten_text')){
    function shorten_text($text, $max_length = 140, $cut_off = '...', $keep_word = false)
    {
        if(strlen($text) <= $max_length) {
            return $text;
        }

        if(strlen($text) > $max_length) {
            if($keep_word) {
                $text = substr($text, 0, $max_length + 1);

                if($last_space = strrpos($text, ' ')) {
                    $text = substr($text, 0, $last_space);
                    $text = rtrim($text);
                    $text .=  $cut_off;
                }
            } else {
                $text = substr($text, 0, $max_length);
                $text = rtrim($text);
                $text .=  $cut_off;
            }
        }

        return $text;
    }
}