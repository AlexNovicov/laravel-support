<?php

namespace Rinvex\Support\WatsonValidating;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Support\MessageProvider;

abstract class ValidatingModel extends Eloquent implements MessageProvider, ValidatingInterface
{
    /**
     * Make model validate attributes.
     *
     * @see \Rinvex\Support\WatsonValidating\ValidatingTrait
     */
    use ValidatingTrait;

    /**
     * The default rules that the model will validate against.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * Get the messages for the instance.
     *
     * @return \Illuminate\Support\MessageBag
     */
    public function getMessageBag()
    {
        return $this->getErrors();
    }
}
