<?php

class Nl2pTest extends PHPUnit_Framework_TestCase
{
  public function testOneParagraph()
  {
    $text = "Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
    $expected = "<p>Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>";
    $this->assertEquals($expected, nl2p($text));
  }

  public function testTwoParagraphs()
  {
    $text = "Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

      Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis.";
    $expected = "<p>Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis.</p>";
    $this->assertEquals($expected, nl2p($text));
  }

  public function testThreeParagraphs()
  {
    $text = "Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

      Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis.

      Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.";
    $expected = "<p>Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis.</p>\n<p>Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>";
    $this->assertEquals($expected, nl2p($text));
  }
}
