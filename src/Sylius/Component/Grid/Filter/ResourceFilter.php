<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Grid\Filter;
use Sylius\Component\Grid\DataSource\DataSourceInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class ResourceFilter implements FilterInterface
{
    /**
     * {@inheritdoc}
     */
    public function apply(DataSourceInterface $dataSource, $field, $data)
    {
        $value = $data['resource'];

        if (empty($value)) {
            return;
        }

        $dataSource->equals($field, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'resource';
    }
}
