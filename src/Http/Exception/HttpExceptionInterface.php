<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace ZfrRest\Http\Exception;

use Zend\Http\Response as HttpResponse;
use ZfrRest\Exception\ExceptionInterface;

/**
 * Interface exception for exceptions that must be catch by the HttpExceptionListener
 *
 * @author  Michaël Gallego <mic.gallego@gmail.com>
 * @licence MIT
 */
interface HttpExceptionInterface extends ExceptionInterface
{
    /**
     * Set the message
     *
     * @param  string $message
     * @return void
     */
    public function setMessage($message);

    /**
     * Set additional errors
     *
     * @param  mixed $errors
     * @return void
     */
    public function setErrors($errors);

    /**
     * Get additional errors
     *
     * @return mixed|null
     */
    public function getErrors();

    /**
     * Prepare the response from the exception
     *
     * @param  HttpResponse $response
     * @return void
     */
    public function prepareResponse(HttpResponse $response);
}