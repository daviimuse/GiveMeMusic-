<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Document_GoogleCloudDocumentaiV1beta3BatchProcessMetadata extends Google_Collection
{
  protected $collection_key = 'individualProcessStatuses';
  public $createTime;
  protected $individualProcessStatusesType = 'Google_Service_Document_GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus';
  protected $individualProcessStatusesDataType = 'array';
  public $state;
  public $stateMessage;
  public $updateTime;

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param Google_Service_Document_GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus[]
   */
  public function setIndividualProcessStatuses($individualProcessStatuses)
  {
    $this->individualProcessStatuses = $individualProcessStatuses;
  }
  /**
   * @return Google_Service_Document_GoogleCloudDocumentaiV1beta3BatchProcessMetadataIndividualProcessStatus[]
   */
  public function getIndividualProcessStatuses()
  {
    return $this->individualProcessStatuses;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setStateMessage($stateMessage)
  {
    $this->stateMessage = $stateMessage;
  }
  public function getStateMessage()
  {
    return $this->stateMessage;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}
