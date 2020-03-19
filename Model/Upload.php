<?php
/**
 * Upload.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.28
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the Upload model.
 *
 * @author  OpenAPI Generator team
 */
class Upload
{
  /**
   * Checksum of the *.catrobat file.
   *
   * @var string|null
   * @SerializedName("checksum")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $checksum;

  /**
   * *.catrobat file.
   *
   * @var UploadedFile|null
   * @SerializedName("file")
   * @Assert\Type("UploadedFile")
   * @Type("UploadedFile")
   */
  protected $file;

  /**
   * Available flavors.
   *
   * @var string|null
   * @SerializedName("flavor")
   * @Assert\Choice({ "pocketcode", "pocketalice", "pocketgalaxy", "pocketphiro", "phirocode", "luna", "create@school", "embroidery", "arduino" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $flavor;

  /**
   * Available tags.
   *
   * @var string[]|null
   * @SerializedName("tags")
   * @Assert\All({
   *     @Assert\Choice({ "Game", "Animation", "Story", "Music", "Art", "Experimental", "Tutorial" })
   * })
   * @Assert\All({
   *     @Assert\Type("string")
   * })
   * @Type("array<string>")
   */
  protected $tags;

  /**
   * Indicates whether a program should be private from the start.
   *
   * @var bool|null
   * @SerializedName("private")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected $private;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->checksum = isset($data['checksum']) ? $data['checksum'] : null;
    $this->file = isset($data['file']) ? $data['file'] : null;
    $this->flavor = isset($data['flavor']) ? $data['flavor'] : null;
    $this->tags = isset($data['tags']) ? $data['tags'] : null;
    $this->private = isset($data['private']) ? $data['private'] : false;
  }

  /**
   * Gets checksum.
   *
   * @return string|null
   */
  public function getChecksum()
  {
    return $this->checksum;
  }

  /**
   * Sets checksum.
   *
   * @param string|null $checksum Checksum of the *.catrobat file
   *
   * @return $this
   */
  public function setChecksum(string $checksum = null)
  {
    $this->checksum = $checksum;

    return $this;
  }

  /**
   * Gets file.
   *
   * @return UploadedFile|null
   */
  public function getFile()
  {
    return $this->file;
  }

  /**
   * Sets file.
   *
   * @param UploadedFile|null $file *.catrobat file
   *
   * @return $this
   */
  public function setFile(UploadedFile $file = null)
  {
    $this->file = $file;

    return $this;
  }

  /**
   * Gets flavor.
   *
   * @return string|null
   */
  public function getFlavor()
  {
    return $this->flavor;
  }

  /**
   * Sets flavor.
   *
   * @param string|null $flavor Available flavors
   *
   * @return $this
   */
  public function setFlavor(string $flavor = null)
  {
    $this->flavor = $flavor;

    return $this;
  }

  /**
   * Gets tags.
   *
   * @return string[]|null
   */
  public function getTags()
  {
    return $this->tags;
  }

  /**
   * Sets tags.
   *
   * @param string[]|null $tags Available tags
   *
   * @return $this
   */
  public function setTags(array $tags = null)
  {
    $this->tags = $tags;

    return $this;
  }

  /**
   * Gets private.
   *
   * @return bool|null
   */
  public function isPrivate()
  {
    return $this->private;
  }

  /**
   * Sets private.
   *
   * @param bool|null $private indicates whether a program should be private from the start
   *
   * @return $this
   */
  public function setPrivate(bool $private = null)
  {
    $this->private = $private;

    return $this;
  }
}
