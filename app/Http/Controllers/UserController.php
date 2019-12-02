<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     * @author LaravelAcademy.org
     */

       public function initial()
    {
        exec('python C:\Users\devil\Desktop\project2\sim.py',$output, $return_var);
        return view('welcome');
    }

    public function search(Request $request)
    // 搜索界面
    {
    	 
         $bookname=$request->input('bookname');
         $myfile= fopen("C:\Users\devil\Desktop\project2\Input_Data\search_query.txt", "w") or die("Unable to open file!");
		 $txt =$bookname;
		 fwrite($myfile, $txt);
         fclose($myfile);
         header("content-type:text/html;charset=utf-8");
         exec('python C:\Users\devil\Desktop\project2\search.py',$output, $return_var);
    	 $str = file_get_contents('C:\Users\devil\Desktop\project2\Result_Data\search_result.txt');   //把url.txt文件中的内容读取到一个字符串中
         $id = explode("\r\n",$str); 
         //$Des=DB::table('book')->select('bookname')->where('id', '=', $id[0])->get();;
    	if($id[0]==0){
    	return view('error');
    	 }
    	 else {

        $title0=DB::table('book')->select('book_name')->where('book_id', '=', $id[0])->get();;
        $title1=DB::table('book')->select('book_name')->where('book_id', '=', $id[1])->get();;
        $title2=DB::table('book')->select('book_name')->where('book_id', '=', $id[2])->get();;
         $Des0=DB::table('book')->select('book_text')->where('book_id', '=', $id[0])->get();;
         $Des1=DB::table('book')->select('book_text')->where('book_id', '=', $id[1])->get();;
         $Des2=DB::table('book')->select('book_text')->where('book_id', '=', $id[2])->get();;
        //  $link0=DB::table('book')->select('book_link')->where('book_id', '=', $id[0])->value("book_link");;
        // $link1=DB::table('book')->select('book_link')->where('book_id', '=', $id[1])->value("book_link");;
        //  $link2=DB::table('book')->select('book_link')->where('book_id', '=', $id[2])->value("book_link");;
        return view('testpage', ['title' =>'title', 'Des0' =>$Des0,'Des1' =>$Des1,'Des2' =>$Des2,'id'=>$id,'bookname'=>$bookname,'title0' =>$title0,'title1' =>$title1,'title2' =>$title2]);}
    }


    public function result(Request $request)
 // 显示结果界面
    {
    	$id=$request->input('id');
    	$name = DB::table('book')->select('book_name')->where('book_id', '=', $id)->get();;
    	$content = DB::table('book')->select('book_text')->where('book_id', '=', $id)->get();;
        $myfile= fopen("C:\Users\devil\Desktop\project2\Input_Data\book_index.txt", "w") or die("Unable to open file!");
         $txt =$id;
         fwrite($myfile, $txt);
         fclose($myfile);
    	         exec('python C:\Users\devil\Desktop\project2\recommendation.py',$output, $return_var);
         $str = file_get_contents('C:\Users\devil\Desktop\project2\Result_Data\recommendation_result.txt');   //把url.txt文件中的内容读取到一个字符串中
         $id2 = explode("\r\n",$str); 
         //推荐的
         $title0=DB::table('book')->select('book_name')->where('book_id', '=', $id2[0])->get();;
         $title1=DB::table('book')->select('book_name')->where('book_id', '=', $id2[1])->get();;
         $title2=DB::table('book')->select('book_name')->where('book_id', '=', $id2[2])->get();;
     //读取abstract
         $Des0=DB::table('book')->select('book_abstract')->where('book_id', '=', $id)->get();;
        //$link=DB::table('book')->select('book_abstract')->where('book_id', '=', $id)->value("book_abstract");;
        //$Des0 = file_get_contents($link);
        // $Des1=DB::table('book')->select('book_text')->where('book_id', '=', $id[1])->get();;
        // $Des2=DB::table('book')->select('book_text')->where('book_id', '=', $id[2])->get();;
        return view('resultpage', ['title' =>'title', 'content' =>$content,'name'=>$name,'id'=>$id,'id2'=>$id2,'title0' =>$title0,'title1' =>$title1,'title2' =>$title2, 'Des0'=>$Des0]);
    }
} 