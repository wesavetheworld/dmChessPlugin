<?php

/**
 * PluginDmChessKnight
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class PluginDmChessKnight extends BaseDmChessKnight
{

  protected function getBasicTargetSquares()
  {
    $mySquare = $this->getSquare();

    return $this->cannibalismFilter(array(
      $mySquare->getSquareByRelativePos(-1, -2),
      $mySquare->getSquareByRelativePos(1, -2),
      $mySquare->getSquareByRelativePos(2, -1),
      $mySquare->getSquareByRelativePos(2, 1),
      $mySquare->getSquareByRelativePos(1, 2),
      $mySquare->getSquareByRelativePos(-1, 2),
      $mySquare->getSquareByRelativePos(-2, 1),
      $mySquare->getSquareByRelativePos(-2, -1)
    ));
  }

  public function preInsert($event)
  {
    parent::preInsert($event);
  
    if(!$this->y)
    {
      $this->y = $this->Player->isWhite() ? 1 : 8;
    }
  }

}