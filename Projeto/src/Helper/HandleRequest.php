<?php
namespace App\Helper;
use Symfony\Component\HttpFoundation\Request;
class HandleRequest
{
    private function extractOf(Request $request)
    {
        $data = $request->query->all();
        $orderBy = array_key_exists("orderBy",$data)?
            $data["orderBy"]:null;
        unset($data['orderBy']);
        $page = array_key_exists("page",$data)?
            $data["page"]:null;
        unset($data['page']);
        $lines = array_key_exists("lines",$data)?
            $data["lines"]:null;
        unset($data['lines']);
        $filter = $data;
        return [$filter, $orderBy, $page, $lines];
    }
    public function extractOrderBy(Request $request)
    {
        list(,$orderBy) = $this->extractOf($request);
        return $orderBy;
    }
    public function extractFilter(Request $request)
    {
        list($filter) = $this->extractOf($request);
        return $filter;
    }
    public function extractPagination(Request $request)
    {
        list(,,$page,$lines) = $this->extractOf($request);
        return [$page,$lines];
    }
}