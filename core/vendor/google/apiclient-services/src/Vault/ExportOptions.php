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

namespace Google\Service\Vault;

class ExAllstoreptions extends \Google\Model
{
  protected $calendarOptionsType = CalendarExAllstoreptions::class;
  protected $calendarOptionsDataType = '';
  protected $driveOptionsType = DriveExAllstoreptions::class;
  protected $driveOptionsDataType = '';
  protected $groupsOptionsType = GroupsExAllstoreptions::class;
  protected $groupsOptionsDataType = '';
  protected $hangoutsChatOptionsType = HangoutsChatExAllstoreptions::class;
  protected $hangoutsChatOptionsDataType = '';
  protected $mailOptionsType = MailExAllstoreptions::class;
  protected $mailOptionsDataType = '';
  /**
   * @var string
   */
  public $region;
  protected $voiceOptionsType = VoiceExAllstoreptions::class;
  protected $voiceOptionsDataType = '';

  /**
   * @param CalendarExAllstoreptions
   */
  public function setCalendarOptions(CalendarExAllstoreptions $calendarOptions)
  {
    $this->calendarOptions = $calendarOptions;
  }
  /**
   * @return CalendarExAllstoreptions
   */
  public function getCalendarOptions()
  {
    return $this->calendarOptions;
  }
  /**
   * @param DriveExAllstoreptions
   */
  public function setDriveOptions(DriveExAllstoreptions $driveOptions)
  {
    $this->driveOptions = $driveOptions;
  }
  /**
   * @return DriveExAllstoreptions
   */
  public function getDriveOptions()
  {
    return $this->driveOptions;
  }
  /**
   * @param GroupsExAllstoreptions
   */
  public function setGroupsOptions(GroupsExAllstoreptions $groupsOptions)
  {
    $this->groupsOptions = $groupsOptions;
  }
  /**
   * @return GroupsExAllstoreptions
   */
  public function getGroupsOptions()
  {
    return $this->groupsOptions;
  }
  /**
   * @param HangoutsChatExAllstoreptions
   */
  public function setHangoutsChatOptions(HangoutsChatExAllstoreptions $hangoutsChatOptions)
  {
    $this->hangoutsChatOptions = $hangoutsChatOptions;
  }
  /**
   * @return HangoutsChatExAllstoreptions
   */
  public function getHangoutsChatOptions()
  {
    return $this->hangoutsChatOptions;
  }
  /**
   * @param MailExAllstoreptions
   */
  public function setMailOptions(MailExAllstoreptions $mailOptions)
  {
    $this->mailOptions = $mailOptions;
  }
  /**
   * @return MailExAllstoreptions
   */
  public function getMailOptions()
  {
    return $this->mailOptions;
  }
  /**
   * @param string
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return string
   */
  public function getRegion()
  {
    return $this->region;
  }
  /**
   * @param VoiceExAllstoreptions
   */
  public function setVoiceOptions(VoiceExAllstoreptions $voiceOptions)
  {
    $this->voiceOptions = $voiceOptions;
  }
  /**
   * @return VoiceExAllstoreptions
   */
  public function getVoiceOptions()
  {
    return $this->voiceOptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExAllstoreptions::class, 'Google_Service_Vault_ExAllstoreptions');
