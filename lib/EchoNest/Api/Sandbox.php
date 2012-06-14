<?php

/**
 * API calls for Echonest Sandboxes
 *
 * @link      http://developer.echonest.com/docs/v4/sandbox.html#overview
 * @author    Marc George <theflyingbrush at gmail dot com> based on code by Brent Shaffer <bshafs at gmail dot com>
 * @license   MIT License
 */

class EchoNest_Api_Sandbox extends EchoNest_Api {

  public function getList()
  {
    $response = $this->client->get('sandbox/list', array(
      'sandbox'         => $this->options["sandbox"]
    ));

    return $this->returnResponse($response);
  }

}

?>