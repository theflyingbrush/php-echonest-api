<?php

/**
 * API calls for Echonest Sandboxes
 *
 * @link      http://developer.echonest.com/docs/v4/sandbox.html#overview
 * @author    Marc George <theflyingbrush at gmail dot com> based on code by Brent Shaffer <bshafs at gmail dot com>
 * @license   MIT License
 */

class EchoNest_Api_Sandbox extends EchoNest_Api {

  /**
  * Get a list of assets available from the given sandbox.
  * http://developer.echonest.com/docs/v4/sandbox.html#list
  *
  * @param   integer $results      the number of results desired (0 < $results < 100)
  * @param   integer $start        the desired index of the first result returned
  * @return  array                 list of audio sandbox assets found
  */
  public function getList($params)
  {

    $options = array_merge($params, array("sandbox" => $this->options["sandbox"]));

    $response = $this->client->get('sandbox/list', $options);

    return $this->returnResponse($response);
  }


  public function access($id)
  {
  	$response = $this->client->get('sandbox/access', array(
  		'id'	 => $id,
  		'sandbox' => $this->options["sandbox"] 
  	), array("signed" => true));

    return $this->returnResponse($response);
  }


}

?>