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

class Google_Service_Pagespeedonline_LighthouseResultV5StackPacks extends Google_Model
{
  public $descriptions;
  public $iconDataURL;
  public $id;
  public $title;

  public function setDescriptions($descriptions)
  {
    $this->descriptions = $descriptions;
  }
  public function getDescriptions()
  {
    return $this->descriptions;
  }
  public function setIconDataURL($iconDataURL)
  {
    $this->iconDataURL = $iconDataURL;
  }
  public function getIconDataURL()
  {
    return $this->iconDataURL;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}
