<?php
/**
 * Created by IntelliJ IDEA.
 * User: cwliu
 * Date: 2017/7/27
 * Time: 上午11:47
 */
abstract class FileWriter{
    abstract public function Write();
}

class XmlFileWriter extends FileWriter{
    public function Write()
    {
        // TODO: Implement Write() method.

        echo "xml file write <br>";
    }
}

class TextFileWriter extends FileWriter{
    public function Write()
    {
        // TODO: Implement Write() method.

        echo "text file write <br>";
    }
}

(new XmlFileWriter())->Write();
(new TextFileWriter())->Write();