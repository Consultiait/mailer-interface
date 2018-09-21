<?php

namespace Mailer\MailerBundle;

use Mailer\MailerBundle\DependencyInjection\ConsultiaMailerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MailerBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ConsultiaMailerExtension();
    }
}
