<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use B2Systems\B2\B2;
use Auth;

class SDKController extends Controller
{
    protected $b2;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->b2 = new B2('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjRjMGMzZjQxMDMyMzc4OTk3MWJjN2ZiNTIwZWUzZjBmNzNlYzk5NmQ5ZGJiNzNiNmNhNTU3Y2QyZWMzMzIzMWYzMGYzNjM5YzYwZmEwMTgxIn0.eyJhdWQiOiI3IiwianRpIjoiNGMwYzNmNDEwMzIzNzg5OTcxYmM3ZmI1MjBlZTNmMGY3M2VjOTk2ZDlkYmI3M2I2Y2E1NTdjZDJlYzMzMjMxZjMwZjM2MzljNjBmYTAxODEiLCJpYXQiOjE1MzI3NzczMjMsIm5iZiI6MTUzMjc3NzMyMywiZXhwIjoxNTY0MzEzMzIyLCJzdWIiOiIwZThkM2M5MS1hN2VmLTQ5YzQtYmMxYy00YTE1YmE4ZTI5OTAiLCJzY29wZXMiOltdfQ.mFNYwIg5OrWF80PgGE0c3wtf1y2r0qcEulSfo8RLgmpuD631lM-H5IPhlM7NlpfK2Wce0HhgkfgH83yK5hqiThy_Mz5yMlgi6NQVgbwNKjXlC9E5EpL_KoQfM3de79eaIiZv3wi8JT24Uhkb2lTi3rHxgqntRQYXq5aTS0oIV0XBiWUMTgLfWvyhriO3_h-FcPy2vcJjCazQV7UGBc7U6kC5rLjbiHumUi8qkpg45HuUQhgLyWfxBHTOIFclnzXJ09XW9MGMYP-wPRDKM5RIKJXM0zv4YRJ1DC1rqRVJctgscioVdm7i1pNQfULoYKMBqIJcKdEwpppUjluMLJyvqH0BWwK47YYMWDrsTgUMFgTxT85jDfjoRPa4NzPILoFZ8NF9qxDFsKGI0OzSBDlJW8QMsDbUuMhBYTkn4vOSlIXLDjnihb2N9mmVcvhfwkKOnnbGIh1r_EEwSKvnE_Ma1Bnq4-GOUW55RZBrV2GMkkscKP_yNeyQIZPic5IZ5kxk8s83YHCgOfwKe7xY9wgWtT_7HPBPk-n0Lo6vWs3zfBJ_IsGxip-NEKnHoxpxCn4H3xWH6DGAz5hp7UDmZop-b7O0cP4cMH7KQ8-xYgq4QwUcAN7UvwW_lJNfhdN6t1FC62OUntpudvkczdNB9WlZH6v4u36a5gih4JXtkKlIdtM');
    }

    public function index()
    {
        // $res = $this->b2->organisations([
        //     'query' => [
        //       'with' => ['users', 'schools']
        //     ]
        // ]);

        $res = $this->b2->createSchool([
            'organisation_id' => '1a0b9ef5-85ae-4713-9a7d-b071004710d4',
            'name' => 'Test School',
            'type' => 'Council',
            'address_line1' => '16 Broadway',
            'address_town' => 'Wilmslow',
            'address_county' => 'Cheshire',
            'address_postcode' => 'SK9 1NB',
            'address_country' => 'United Kingdom',
            'phone' => '01625 252373'
        ]);

        // $res = $this->b2->deleteSchool('62b5bb11-5ccd-43ad-b47e-0017707d3920');

        dd($res);
    }

    public function token()
    {
        return Auth::user()->createToken('Test')->accessToken;
    }
}
