<?php
// 5-1
class Board
{
  public $subject = "チャプター5練習問題";
  public $name = "Soga";
  public $contents = "練習問題が終わりました。";
  public function dispArtcile()
  {
    print "件名:";
    print $this->subject;
    print "名前:";
    print $this->name;
    print "内容:";
    print $this->contents;
    print "<br>";
  }
}

// 5-3 5-4
class NewBoard extends Board
{
  public $subject = "新しい掲示板です。";
  public function submitArticle(){

  }

  public function editArticle(){

  }

  public function deleteArticle(){

  }
}

// 5-2
$board = new Board();
$board->dispArtcile();

// 5-3
$Nboard = new NewBoard();
$Nboard->dispArtcile();
