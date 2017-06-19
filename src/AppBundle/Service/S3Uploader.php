<?php

namespace AppBundle\Service;


use Aws\S3\S3Client;
use Aws\Credentials\Credentials;
use Aws\Sdk;


/**
 * Uploads an image file to the S3 service, and retrieves a url to be returned to the orm later
 */
class S3Uploader
{

  protected $bucket;
  protected $token;
  protected $secret;

  function __construct($bucket, $token, $secret)
  {
    $this->bucket = $bucket;
    $this->token = $token;
    $this->secret = $secret;
  }

  public function uploadFile($file)
  {
    // Get the file that's uploaded, guess its extension, and generate the filehash
    $filehash = sha1_file($file);
    $extension = $file->guessExtension();

    // Create a credentials object to create client
    $credentials = new Credentials($this->token, $this->secret);

    $s3 = S3Client::factory(array(
      'credentials' => $credentials,
      'region' => 'eu-west-1',
      'version' => 'latest'
  ));

    // Make the request
    $response = $s3->putObject(array(
      'Bucket' => $this->bucket,
      'Key' => $filehash.".".$extension,
      'SourceFile' => $file,
      'ACL' => 'public-read' // This bit is important
    ));

    // Get the nice amazon URL and return it
    return $response->get('ObjectURL');


  }
}
