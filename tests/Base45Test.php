<?php

declare(strict_types=1);

namespace Mhauri\Base45;

use Mhauri\Base45;
use PHPUnit\Framework\TestCase;

class Base45Test extends TestCase
{
    /**
     * @param $data
     *
     * @dataProvider dataProvider
     */
    public function testEncoding($input, $output)
    {
        $result = (new Base45())->encode($input);
        $this->assertEquals($output, $result);
    }

    /**
     * @param $data
     *
     * @dataProvider dataProvider
     */
    public function testDecoding($input, $output)
    {
        $result = (new Base45())->decode($output);
        $this->assertEquals($input, $result);
    }

    public function testRandomBytes()
    {
        $base45 = new Base45();
        $bytes = random_bytes(128);
        $encoded = $base45->encode($bytes);
        $decoded = $base45->decode($encoded);
        $this->assertSame($decoded, $bytes);
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        (new Base45())->decode('x');
    }

    public function dataProvider(): array
    {
        return [
            ['AB', 'BB8'],
            ['Hello!!', '%69 VD92EX0'],
            ['base-45', 'UJCLQE7W581'],
        ];
    }
}
