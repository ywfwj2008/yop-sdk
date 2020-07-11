<?php


namespace Yeepay\Yop\Sdk\Http;


class Headers
{
    /*
     *  Standard HTTP Headers
     */
    const AUTHORIZATION = "Authorization";

    const CACHE_CONTROL = "Cache-Control";

    const CONTENT_DISPOSITION = "Content-Disposition";

    const CONTENT_ENCODING = "Content-Encoding";

    const CONTENT_LENGTH = "Content-Length";

    const CONTENT_MD5 = "Content-MD5";

    const CONTENT_RANGE = "Content-Range";

    const CONTENT_TYPE = "Content-Type";

    const DATE = "Date";

    const ETAG = "ETag";

    const EXPIRES = "Expires";

    const HOST = "Host";

    const LAST_MODIFIED = "Last-Modified";

    const LOCATION = "Location";

    const RANGE = "Range";

    const SERVER = "Server";

    const TRANSFER_ENCODING = "Transfer-Encoding";

    const USER_AGENT = "User-Agent";


    /*
     * YOP Common HTTP Headers
     */

    const YOP_ACL = "x-yop-acl";

    const YOP_CONTENT_SHA256 = "x-yop-content-sha256";

    /**
     * 签名
     */
    const YOP_SIGN = "x-yop-sign";

    const YOP_HASH_CRC64ECMA = "x-yop-hash-crc64ecma";

    const YOP_COPY_METADATA_DIRECTIVE = "x-yop-metadata-directive";

    const YOP_COPY_SOURCE_IF_MATCH = "x-yop-copy-source-if-match";

    const YOP_DATE = "x-yop-date";

    const YOP_APPKEY = "x-yop-appkey";

    const YOP_PREFIX = "x-yop-";

    const YOP_REQUEST_ID = "x-yop-request-id";

    const YOP_SECURITY_TOKEN = "x-yop-security-token";

    const YOP_USER_METADATA_PREFIX = "x-yop-meta-";

    const YOP_VIA = "x-yop-via";

    const YOP_ENCRYPT_TYPE = "x-yop-encrypt-type";

    /*
     * YOS HTTP Headers
     */

    const YOP_COPY_SOURCE = "x-yop-copy-source";

    const YOP_COPY_SOURCE_IF_MODIFIED_SINCE = "x-yop-copy-source-if-modified-since";

    const YOP_COPY_SOURCE_IF_NONE_MATCH = "x-yop-copy-source-if-none-match";

    const YOP_COPY_SOURCE_IF_UNMODIFIED_SINCE = "x-yop-copy-source-if-unmodified-since";

    const YOP_DEBUG_ID = "x-yop-debug-id";

    const YOP_NEXT_APPEND_OFFSET = "x-yop-next-append-offset";

    const YOP_OBJECT_TYPE = "x-yop-object-type";
}