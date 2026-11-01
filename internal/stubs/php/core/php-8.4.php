<?php

// Generated from the local PHP runtime; DO NOT EDIT.
// Generated with PHP 8.5.12 via runtime reflection.
// Skipped non-global, non-declarable, or non-reflectable internal functions: clone, die, dom\import_simplexml, exit, mongodb\driver\monitoring\addsubscriber, mongodb\driver\monitoring\mongoc_log, mongodb\driver\monitoring\removesubscriber.
// Skipped non-global or non-reflectable internal class-like symbols: BcMath\Number, Dom\AdjacentPosition, Dom\Attr, Dom\CDATASection, Dom\CharacterData, Dom\ChildNode, Dom\Comment, Dom\Document, Dom\DocumentFragment, Dom\DocumentType, Dom\DtdNamedNodeMap, Dom\Element, Dom\Entity, Dom\EntityReference, Dom\HTMLCollection, Dom\HTMLDocument, Dom\HTMLElement, Dom\Implementation, Dom\NamedNodeMap, Dom\NamespaceInfo, Dom\Node, Dom\NodeList, Dom\Notation, Dom\ParentNode, Dom\ProcessingInstruction, Dom\Text, Dom\TokenList, Dom\XMLDocument, Dom\XPath, FFI\CData, FFI\CType, FFI\Exception, FFI\ParserException, FTP\Connection, Filter\FilterException, Filter\FilterFailedException, LDAP\Connection, LDAP\Result, LDAP\ResultEntry, MongoDB\BSON\Binary, MongoDB\BSON\BinaryInterface, MongoDB\BSON\DBPointer, MongoDB\BSON\Decimal128, MongoDB\BSON\Decimal128Interface, MongoDB\BSON\Document, MongoDB\BSON\Int64, MongoDB\BSON\Iterator, MongoDB\BSON\Javascript, MongoDB\BSON\JavascriptInterface, MongoDB\BSON\MaxKey, MongoDB\BSON\MaxKeyInterface, MongoDB\BSON\MinKey, MongoDB\BSON\MinKeyInterface, MongoDB\BSON\ObjectId, MongoDB\BSON\ObjectIdInterface, MongoDB\BSON\PackedArray, MongoDB\BSON\Persistable, MongoDB\BSON\Regex, MongoDB\BSON\RegexInterface, MongoDB\BSON\Serializable, MongoDB\BSON\Symbol, MongoDB\BSON\Timestamp, MongoDB\BSON\TimestampInterface, MongoDB\BSON\Type, MongoDB\BSON\UTCDateTime, MongoDB\BSON\UTCDateTimeInterface, MongoDB\BSON\Undefined, MongoDB\BSON\Unserializable, MongoDB\BSON\VectorType, MongoDB\Driver\BulkWrite, MongoDB\Driver\BulkWriteCommand, MongoDB\Driver\BulkWriteCommandResult, MongoDB\Driver\ClientEncryption, MongoDB\Driver\Command, MongoDB\Driver\Cursor, MongoDB\Driver\CursorInterface, MongoDB\Driver\Exception\AuthenticationException, MongoDB\Driver\Exception\BulkWriteCommandException, MongoDB\Driver\Exception\BulkWriteException, MongoDB\Driver\Exception\CommandException, MongoDB\Driver\Exception\ConnectionException, MongoDB\Driver\Exception\ConnectionTimeoutException, MongoDB\Driver\Exception\EncryptionException, MongoDB\Driver\Exception\Exception, MongoDB\Driver\Exception\ExecutionTimeoutException, MongoDB\Driver\Exception\InvalidArgumentException, MongoDB\Driver\Exception\LogicException, MongoDB\Driver\Exception\RuntimeException, MongoDB\Driver\Exception\ServerException, MongoDB\Driver\Exception\UnexpectedValueException, MongoDB\Driver\Manager, MongoDB\Driver\Monitoring\CommandFailedEvent, MongoDB\Driver\Monitoring\CommandStartedEvent, MongoDB\Driver\Monitoring\CommandSubscriber, MongoDB\Driver\Monitoring\CommandSucceededEvent, MongoDB\Driver\Monitoring\LogSubscriber, MongoDB\Driver\Monitoring\SDAMSubscriber, MongoDB\Driver\Monitoring\ServerChangedEvent, MongoDB\Driver\Monitoring\ServerClosedEvent, MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent, MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent, MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent, MongoDB\Driver\Monitoring\ServerOpeningEvent, MongoDB\Driver\Monitoring\Subscriber, MongoDB\Driver\Monitoring\TopologyChangedEvent, MongoDB\Driver\Monitoring\TopologyClosedEvent, MongoDB\Driver\Monitoring\TopologyOpeningEvent, MongoDB\Driver\Query, MongoDB\Driver\ReadConcern, MongoDB\Driver\ReadPreference, MongoDB\Driver\Server, MongoDB\Driver\ServerApi, MongoDB\Driver\ServerDescription, MongoDB\Driver\Session, MongoDB\Driver\TopologyDescription, MongoDB\Driver\WriteConcern, MongoDB\Driver\WriteConcernError, MongoDB\Driver\WriteError, MongoDB\Driver\WriteResult, Odbc\Connection, Odbc\Result, Pdo\Mysql, Pdo\Odbc, Pdo\Pgsql, Pdo\Sqlite, PgSql\Connection, PgSql\Lob, PgSql\Result, Random\BrokenRandomEngineError, Random\CryptoSafeEngine, Random\Engine, Random\Engine\Mt19937, Random\Engine\PcgOneseq128XslRr64, Random\Engine\Secure, Random\Engine\Xoshiro256StarStar, Random\IntervalBoundary, Random\RandomError, Random\RandomException, Random\Randomizer, Soap\Sdl, Soap\Url, Uri\InvalidUriException, Uri\Rfc3986\Uri, Uri\UriComparisonMode, Uri\UriError, Uri\UriException, Uri\WhatWg\InvalidUrlException, Uri\WhatWg\Url, Uri\WhatWg\UrlValidationError, Uri\WhatWg\UrlValidationErrorType, dom\domexception.

/**
 * 别名 gettext
 */
function _(string $message): string {}

/**
 * 绝对值
 */
function abs(int|float $num): int|float {}

/**
 * 反余弦
 */
function acos(float $num): float {}

/**
 * 反双曲余弦
 */
function acosh(float $num): float {}

/**
 * 以 C 语言风格使用反斜线转义字符串中的字符
 */
function addcslashes(string $string, string $characters): string {}

/**
 * 使用反斜线引用字符串
 */
function addslashes(string $string): string {}

/**
 * 检查数组所有元素是否都满足回调函数的条件 (PHP 8 >= 8.4.0)
 */
function array_all(array $array, callable $callback): bool {}

/**
 * 检查数组中是否至少有一个元素满足回调函数的条件 (PHP 8 >= 8.4.0)
 */
function array_any(array $array, callable $callback): bool {}

/**
 * 将数组中的所有键名修改为全大写或小写
 */
function array_change_key_case(array $array, int $case = CASE_LOWER): array {}

/**
 * 将一个数组分割成多个
 */
function array_chunk(array $array, int $length, bool $preserve_keys = false): array {}

/**
 * 返回输入数组中指定列的值
 */
function array_column(array $array, string|int|null $column_key, string|int|null $index_key = NULL): array {}

/**
 * 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
 */
function array_combine(array $keys, array $values): array {}

/**
 * 统计数组中每个不同值的出现次数
 */
function array_count_values(array $array): array {}

/**
 * 计算数组的差集
 */
function array_diff(array $array, array ...$arrays): array {}

/**
 * 带索引检查计算数组的差集
 */
function array_diff_assoc(array $array, array ...$arrays): array {}

/**
 * 使用键名比较计算数组的差集
 */
function array_diff_key(array $array, array ...$arrays): array {}

/**
 * 用用户提供的回调函数做索引检查来计算数组的差集
 */
function array_diff_uassoc(array $array, ...$rest): array {}

/**
 * 用回调函数对键名比较计算数组的差集
 */
function array_diff_ukey(array $array, ...$rest): array {}

/**
 * 用给定的值填充数组
 */
function array_fill(int $start_index, int $count, mixed $value): array {}

/**
 * 使用指定的键和值填充数组
 */
function array_fill_keys(array $keys, mixed $value): array {}

/**
 * 使用回调函数过滤数组的元素
 */
function array_filter(array $array, ?callable $callback = NULL, int $mode = 0): array {}

/**
 * 返回满足回调函数条件的第一个元素 (PHP 8 >= 8.4.0)
 */
function array_find(array $array, callable $callback): mixed {}

/**
 * 返回满足回调函数条件的第一个元素的键 (PHP 8 >= 8.4.0)
 */
function array_find_key(array $array, callable $callback): mixed {}

/**
 * 获取数组的第一个值 (PHP 8 >= 8.5.0)
 */
function array_first(array $array): mixed {}

/**
 * 交换数组中的键和值
 */
function array_flip(array $array): array {}

/**
 * 计算数组的交集
 */
function array_intersect(array $array, array ...$arrays): array {}

/**
 * 带索引检查计算数组的交集
 */
function array_intersect_assoc(array $array, array ...$arrays): array {}

/**
 * 使用键名比较计算数组的交集
 */
function array_intersect_key(array $array, array ...$arrays): array {}

/**
 * 带索引检查计算数组的交集，用回调函数比较索引
 */
function array_intersect_uassoc(array $array, ...$rest): array {}

/**
 * 在键名上使用回调函数来比较计算数组的交集
 */
function array_intersect_ukey(array $array, ...$rest): array {}

/**
 * 判断指定 array 是否为 list (PHP 8 >= 8.1.0)
 */
function array_is_list(array $array): bool {}

/**
 * 检查数组里是否有指定的键名或索引
 */
function array_key_exists($key, array $array): bool {}

/**
 * 获取指定数组的第一个键
 */
function array_key_first(array $array): string|int|null {}

/**
 * 获取一个数组的最后一个键值
 */
function array_key_last(array $array): string|int|null {}

/**
 * 返回数组中部分的或所有的键名
 */
function array_keys(array $array, mixed $filter_value = null, bool $strict = false): array {}

/**
 * 获取数组的最后一个值 (PHP 8 >= 8.5.0)
 */
function array_last(array $array): mixed {}

/**
 * 为数组的每个元素应用回调函数
 */
function array_map(?callable $callback, array $array, array ...$arrays): array {}

/**
 * 合并一个或多个数组
 */
function array_merge(array ...$arrays): array {}

/**
 * 递归地合并一个或多个数组
 */
function array_merge_recursive(array ...$arrays): array {}

/**
 * 对多个数组或多维数组进行排序
 */
function array_multisort(&$array, &...$rest): true {}

/**
 * 以指定长度将一个值填充进数组
 */
function array_pad(array $array, int $length, mixed $value): array {}

/**
 * 弹出数组最后一个单元（出栈）
 */
function array_pop(array &$array): mixed {}

/**
 * 计算数组中所有值的乘积
 */
function array_product(array $array): int|float {}

/**
 * 将一个或多个单元压入数组的末尾（入栈）
 */
function array_push(array &$array, mixed ...$values): int {}

/**
 * 从数组中随机取出一个或多个随机键
 */
function array_rand(array $array, int $num = 1): array|string|int {}

/**
 * 用回调函数迭代地将数组简化为单一的值
 */
function array_reduce(array $array, callable $callback, mixed $initial = NULL): mixed {}

/**
 * 使用传递的数组替换第一个数组的元素
 */
function array_replace(array $array, array ...$replacements): array {}

/**
 * 使用传递的数组递归替换第一个数组的元素
 */
function array_replace_recursive(array $array, array ...$replacements): array {}

/**
 * 返回单元顺序相反的数组
 */
function array_reverse(array $array, bool $preserve_keys = false): array {}

/**
 * 在数组中搜索给定的值，如果成功则返回首个相应的键名
 */
function array_search(mixed $needle, array $haystack, bool $strict = false): string|int|false {}

/**
 * 将数组开头的单元移出数组
 */
function array_shift(array &$array): mixed {}

/**
 * 从数组中取出一段
 */
function array_slice(array $array, int $offset, ?int $length = NULL, bool $preserve_keys = false): array {}

/**
 * 去掉数组中的某一部分并用其它值取代
 */
function array_splice(array &$array, int $offset, ?int $length = NULL, mixed $replacement = []): array {}

/**
 * 对数组中所有值求和
 */
function array_sum(array $array): int|float {}

/**
 * 用回调函数比较数据来计算数组的差集
 */
function array_udiff(array $array, ...$rest): array {}

/**
 * 带索引检查计算数组的差集，用回调函数比较数据
 */
function array_udiff_assoc(array $array, ...$rest): array {}

/**
 * 带索引检查计算数组的差集，用回调函数比较数据和索引
 */
function array_udiff_uassoc(array $array, ...$rest): array {}

/**
 * 计算数组的交集，用回调函数比较数据
 */
function array_uintersect(array $array, ...$rest): array {}

/**
 * 带索引检查计算数组的交集，用回调函数比较数据
 */
function array_uintersect_assoc(array $array, ...$rest): array {}

/**
 * 带索引检查计算数组的交集，用单独的回调函数比较数据和索引
 */
function array_uintersect_uassoc(array $array, ...$rest): array {}

/**
 * 移除数组中重复的值
 */
function array_unique(array $array, int $flags = SORT_STRING): array {}

/**
 * 在数组开头插入一个或多个单元
 */
function array_unshift(array &$array, mixed ...$values): int {}

/**
 * 返回数组中所有的值
 */
function array_values(array $array): array {}

/**
 * 使用用户自定义函数对数组中的每个元素做回调处理
 */
function array_walk(object|array &$array, callable $callback, mixed $arg = null): true {}

/**
 * 对数组中的每个成员递归地应用用户函数
 */
function array_walk_recursive(object|array &$array, callable $callback, mixed $arg = null): true {}

/**
 * 对数组进行降向排序并保持索引关系
 */
function arsort(array &$array, int $flags = SORT_REGULAR): true {}

/**
 * 反正弦
 */
function asin(float $num): float {}

/**
 * 反双曲正弦
 */
function asinh(float $num): float {}

/**
 * 对数组进行升序排序并保持索引关系
 */
function asort(array &$array, int $flags = SORT_REGULAR): true {}

/**
 * 断言检测
 */
function assert(mixed $assertion, \Throwable|string|null $description = NULL): bool {}

/**
 * 设置/获取各种断言 flag
 */
function assert_options(int $option, mixed $value = null): mixed {}

/**
 * 反正切
 */
function atan(float $num): float {}

/**
 * 两个参数的反正切
 */
function atan2(float $y, float $x): float {}

/**
 * 反双曲正切
 */
function atanh(float $num): float {}

/**
 * 对使用 MIME base64 编码的数据进行解码
 */
function base64_decode(string $string, bool $strict = false): string|false {}

/**
 * 使用 MIME base64 对数据进行编码
 */
function base64_encode(string $string): string {}

/**
 * 在任意进制之间转换数字
 */
function base_convert(string $num, int $from_base, int $to_base): string {}

/**
 * 返回路径中的文件名部分
 */
function basename(string $path, string $suffix = ""): string {}

/**
 * 两个任意精度数字的加法计算
 */
function bcadd(string $num1, string $num2, ?int $scale = NULL): string {}

/**
 * Round up arbitrary precision number (PHP 8 >= 8.4.0)
 */
function bcceil(string $num): string {}

/**
 * 比较两个任意精度的数字
 */
function bccomp(string $num1, string $num2, ?int $scale = NULL): int {}

/**
 * 两个任意精度的数字除法计算
 */
function bcdiv(string $num1, string $num2, ?int $scale = NULL): string {}

/**
 * Get the quotient and modulus of an arbitrary precision number (PHP 8 >= 8.4.0)
 */
function bcdivmod(string $num1, string $num2, ?int $scale = NULL): array {}

/**
 * Round down arbitrary precision number (PHP 8 >= 8.4.0)
 */
function bcfloor(string $num): string {}

/**
 * 任意精度数字取模
 */
function bcmod(string $num1, string $num2, ?int $scale = NULL): string {}

/**
 * 两个任意精度数字乘法计算
 */
function bcmul(string $num1, string $num2, ?int $scale = NULL): string {}

/**
 * 任意精度数字的乘方
 */
function bcpow(string $num, string $exponent, ?int $scale = NULL): string {}

/**
 * Raise an arbitrary precision number to another, reduced by a specified modulus
 */
function bcpowmod(string $num, string $exponent, string $modulus, ?int $scale = NULL): string {}

/**
 * Round arbitrary precision number (PHP 8 >= 8.4.0)
 */
function bcround(string $num, int $precision = 0, \RoundingMode $mode = RoundingMode::HalfAwayFromZero): string {}

/**
 * 设置/获取所有 bc math 函数的默认小数点保留位数
 */
function bcscale(?int $scale = NULL): int {}

/**
 * 任意精度数字的二次方根
 */
function bcsqrt(string $num, ?int $scale = NULL): string {}

/**
 * 两个任意精度数字的减法
 */
function bcsub(string $num1, string $num2, ?int $scale = NULL): string {}

/**
 * 将二进制数据转换为十六进制表示
 */
function bin2hex(string $string): string {}

/**
 * Specify or get the character encoding in which the messages from the DOMAIN message catalog will be returned
 */
function bind_textdomain_codeset(string $domain, ?string $codeset = NULL): string|false {}

/**
 * 二进制转换为十进制
 */
function bindec(string $binary_string): int|float {}

/**
 * Sets or gets the path for a domain
 */
function bindtextdomain(string $domain, ?string $directory = NULL): string|false {}

/**
 * 获取变量的布尔值
 */
function boolval(mixed $value): bool {}

/**
 * 关闭一个 bzip2 文件
 */
function bzclose($bz): bool {}

/**
 * 把一个字符串压缩成 bzip2 编码数据
 */
function bzcompress(string $data, int $block_size = 4, int $work_factor = 0): string|int {}

/**
 * 解压经 bzip2 编码过的数据
 */
function bzdecompress(string $data, bool $use_less_memory = false): string|int|false {}

/**
 * 返回一个 bzip2 错误码
 */
function bzerrno($bz): int {}

/**
 * 返回包含 bzip2 错误号和错误字符串的一个 array
 */
function bzerror($bz): array {}

/**
 * 返回一个 bzip2 的错误字符串
 */
function bzerrstr($bz): string {}

/**
 * 什么都不做
 */
function bzflush($bz): bool {}

/**
 * 打开 bzip2 压缩文件
 */
function bzopen($file, string $mode) {}

/**
 * bzip2 文件二进制安全地读取
 */
function bzread($bz, int $length = 1024): string|false {}

/**
 * 二进制安全地写入 bzip2 文件
 */
function bzwrite($bz, string $data, ?int $length = NULL): int|false {}

/**
 * 返回指定历法中某年某月的天数
 */
function cal_days_in_month(int $calendar, int $month, int $year): int {}

/**
 * 从儒略日数转换为支持的历法
 */
function cal_from_jd(int $julian_day, int $calendar): array {}

/**
 * 返回选定历法的信息
 */
function cal_info(int $calendar = -1): array {}

/**
 * 从支持的历法转换为儒略日数
 */
function cal_to_jd(int $calendar, int $month, int $day, int $year): int {}

/**
 * 把第一个参数作为回调函数调用
 */
function call_user_func(callable $callback, mixed ...$args): mixed {}

/**
 * 调用回调函数，并把一个数组参数作为回调函数的参数
 */
function call_user_func_array(callable $callback, array $args): mixed {}

/**
 * 进一法取整
 */
function ceil(int|float $num): float {}

/**
 * 改变目录
 */
function chdir(string $directory): bool {}

/**
 * 验证一个格里高里日期
 */
function checkdate(int $month, int $day, int $year): bool {}

/**
 * 给指定的主机（域名）或者IP地址做DNS通信检查
 */
function checkdnsrr(string $hostname, string $type = "MX"): bool {}

/**
 * 改变文件所属的组
 */
function chgrp(string $filename, string|int $group): bool {}

/**
 * 改变文件模式
 */
function chmod(string $filename, int $permissions): bool {}

/**
 * rtrim 的别名
 */
function chop(string $string, string $characters = " \n\r\t\v\x00"): string {}

/**
 * 改变文件的所有者
 */
function chown(string $filename, string|int $user): bool {}

/**
 * 从数字生成单字节字符串
 */
function chr(int $codepoint): string {}

/**
 * 将字符串分割成小块
 */
function chunk_split(string $string, int $length = 76, string $separator = "\r\n"): string {}

/**
 * 为类创建别名
 */
function class_alias(string $class, string $alias, bool $autoload = true): bool {}

/**
 * 查类是否已经定义
 */
function class_exists(string $class, bool $autoload = true): bool {}

/**
 * 返回指定的类或接口实现的所有接口
 */
function class_implements($object_or_class, bool $autoload = true): array|false {}

/**
 * 返回指定类的父类
 */
function class_parents($object_or_class, bool $autoload = true): array|false {}

/**
 * Return the traits used by the given class
 */
function class_uses($object_or_class, bool $autoload = true): array|false {}

/**
 * 清除文件状态缓存
 */
function clearstatcache(bool $clear_realpath_cache = false, string $filename = ""): void {}

/**
 * Returns the current process title
 */
function cli_get_process_title(): ?string {}

/**
 * Sets the process title
 */
function cli_set_process_title(string $title): bool {}

/**
 * 关闭目录句柄
 */
function closedir($dir_handle = NULL): void {}

/**
 * 关闭系统日志链接
 */
function closelog(): true {}

function collator_asort(\Collator $object, array &$array, int $flags = Collator::SORT_REGULAR): bool {}

function collator_compare(\Collator $object, string $string1, string $string2): int|false {}

function collator_create(string $locale): ?\Collator {}

function collator_get_attribute(\Collator $object, int $attribute): int|false {}

function collator_get_error_code(\Collator $object): int|false {}

function collator_get_error_message(\Collator $object): string|false {}

function collator_get_locale(\Collator $object, int $type): string|false {}

function collator_get_sort_key(\Collator $object, string $string): string|false {}

function collator_get_strength(\Collator $object): int {}

function collator_set_attribute(\Collator $object, int $attribute, int $value): bool {}

function collator_set_strength(\Collator $object, int $strength): true {}

function collator_sort(\Collator $object, array &$array, int $flags = Collator::SORT_REGULAR): bool {}

function collator_sort_with_sort_keys(\Collator $object, array &$array): bool {}

/**
 * 建立一个数组，包括变量名和它们的值
 */
function compact($var_name, ...$var_names): array {}

/**
 * 检查客户端是否已经断开
 */
function connection_aborted(): int {}

/**
 * 返回连接的状态位
 */
function connection_status(): int {}

/**
 * 返回一个常量的值
 */
function constant(string $name): mixed {}

/**
 * 解码一个 uuencode 编码的字符串
 */
function convert_uudecode(string $string): string|false {}

/**
 * 使用 uuencode 编码一个字符串
 */
function convert_uuencode(string $string): string {}

/**
 * 拷贝文件
 */
function copy(string $from, string $to, $context = NULL): bool {}

/**
 * 余弦
 */
function cos(float $num): float {}

/**
 * 双曲余弦
 */
function cosh(float $num): float {}

/**
 * 统计数组、Countable 对象中所有元素的数量
 */
function count(\Countable|array $value, int $mode = COUNT_NORMAL): int {}

/**
 * 返回字符串所用字符的信息
 */
function count_chars(string $string, int $mode = 0): array|string {}

/**
 * 计算一个字符串的 crc32 多项式
 */
function crc32(string $string): int {}

/**
 * 单向字符串散列
 */
function crypt(string $string, string $salt): string {}

/**
 * 检测字母数字式字符
 */
function ctype_alnum(mixed $text): bool {}

/**
 * 检测字母字符
 */
function ctype_alpha(mixed $text): bool {}

/**
 * 检测控制字符
 */
function ctype_cntrl(mixed $text): bool {}

/**
 * 检测数字字符
 */
function ctype_digit(mixed $text): bool {}

/**
 * 检测除空格外的任何打印字符
 */
function ctype_graph(mixed $text): bool {}

/**
 * 检测小写字符
 */
function ctype_lower(mixed $text): bool {}

/**
 * 检测可打印字符
 */
function ctype_print(mixed $text): bool {}

/**
 * 检测可打印的字符是不是不包含空白、数字和字母
 */
function ctype_punct(mixed $text): bool {}

/**
 * 检测空白字符
 */
function ctype_space(mixed $text): bool {}

/**
 * 检测大写字符
 */
function ctype_upper(mixed $text): bool {}

/**
 * 检测字符是否只包含十六进制字符
 */
function ctype_xdigit(mixed $text): bool {}

/**
 * 关闭 cURL 会话
 */
function curl_close(\CurlHandle $handle): void {}

/**
 * 复制 cURL 句柄及其所有选项
 */
function curl_copy_handle(\CurlHandle $handle): \CurlHandle|false {}

/**
 * 返回最后一次的错误代码
 */
function curl_errno(\CurlHandle $handle): int {}

/**
 * 返回当前会话最后一次错误的字符串
 */
function curl_error(\CurlHandle $handle): string {}

/**
 * 使用 URL 编码指定字符串
 */
function curl_escape(\CurlHandle $handle, string $string): string|false {}

/**
 * 执行 cURL 会话
 */
function curl_exec(\CurlHandle $handle): string|bool {}

function curl_file_create(string $filename, ?string $mime_type = NULL, ?string $posted_filename = NULL): \CURLFile {}

/**
 * 获取 cURL 连接资源句柄的信息
 */
function curl_getinfo(\CurlHandle $handle, ?int $option = NULL): mixed {}

/**
 * 初始化 cURL 会话
 */
function curl_init(?string $url = NULL): \CurlHandle|false {}

/**
 * 添加普通 cURL 句柄到 cURL 多句柄
 */
function curl_multi_add_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int {}

/**
 * 从多句柄中移除所有 cURL 句柄
 */
function curl_multi_close(\CurlMultiHandle $multi_handle): void {}

/**
 * 返回上一次 curl 批处理的错误码
 */
function curl_multi_errno(\CurlMultiHandle $multi_handle): int {}

/**
 * 运行当前 cURL 句柄的子连接
 */
function curl_multi_exec(\CurlMultiHandle $multi_handle, &$still_running): int {}

function curl_multi_get_handles(\CurlMultiHandle $multi_handle): array {}

/**
 * 如果设置了 CURLOPT_RETURNTRANSFER，则返回 cURL 句柄的内容
 */
function curl_multi_getcontent(\CurlHandle $handle): ?string {}

/**
 * 获取当前传输的有关信息
 */
function curl_multi_info_read(\CurlMultiHandle $multi_handle, &$queued_messages = NULL): array|false {}

/**
 * 返回新 cURL 批处理句柄
 */
function curl_multi_init(): \CurlMultiHandle {}

/**
 * 从一组 cURL 句柄中移除一个句柄
 */
function curl_multi_remove_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int {}

/**
 * 等待，直到任何 cURL 多句柄连接可以进行读取或写入
 */
function curl_multi_select(\CurlMultiHandle $multi_handle, float $timeout = 1.0): int {}

/**
 * 设置 cURL 并行选项
 */
function curl_multi_setopt(\CurlMultiHandle $multi_handle, int $option, mixed $value): bool {}

/**
 * 返回字符串描述的错误代码
 */
function curl_multi_strerror(int $error_code): ?string {}

/**
 * 暂停和取消暂停连接
 */
function curl_pause(\CurlHandle $handle, int $flags): int {}

/**
 * 重置一个 libcurl 会话句柄的所有的选项
 */
function curl_reset(\CurlHandle $handle): void {}

/**
 * 设置 cURL 传输选项
 */
function curl_setopt(\CurlHandle $handle, int $option, mixed $value): bool {}

/**
 * 为 cURL 传输会话批量设置选项
 */
function curl_setopt_array(\CurlHandle $handle, array $options): bool {}

/**
 * 关闭 cURL 共享句柄
 */
function curl_share_close(\CurlShareHandle $share_handle): void {}

/**
 * 返回共享 curl 句柄的最后一次错误编号
 */
function curl_share_errno(\CurlShareHandle $share_handle): int {}

/**
 * 初始化 cURL 共享句柄
 */
function curl_share_init(): \CurlShareHandle {}

/**
 * 初始化 持久 cURL 共享句柄 (PHP 8 >= 8.5.0)
 */
function curl_share_init_persistent(array $share_options): \CurlSharePersistentHandle {}

/**
 * 为 cURL 共享句柄设置选项
 */
function curl_share_setopt(\CurlShareHandle $share_handle, int $option, mixed $value): bool {}

/**
 * 返回错误编号对应的错误消息
 */
function curl_share_strerror(int $error_code): ?string {}

/**
 * 返回错误代码的字符串描述
 */
function curl_strerror(int $error_code): ?string {}

/**
 * 解码指定 URL 编码的字符串
 */
function curl_unescape(\CurlHandle $handle, string $string): string|false {}

function curl_upkeep(\CurlHandle $handle): bool {}

/**
 * 获取 cURL 版本信息
 */
function curl_version(): array|false {}

/**
 * 返回数组中的当前值
 */
function current(object|array $array): mixed {}

/**
 * 格式化 Unix 时间戳
 */
function date(string $format, ?int $timestamp = NULL): string {}

/**
 * 别名 DateTime::add
 */
function date_add(\DateTime $object, \DateInterval $interval): \DateTime {}

/**
 * create a new DateTime object
 */
function date_create(string $datetime = "now", ?\DateTimeZone $timezone = NULL): \DateTime|false {}

/**
 * 别名 DateTime::createFromFormat
 */
function date_create_from_format(string $format, string $datetime, ?\DateTimeZone $timezone = NULL): \DateTime|false {}

/**
 * create a new DateTimeImmutable object
 */
function date_create_immutable(string $datetime = "now", ?\DateTimeZone $timezone = NULL): \DateTimeImmutable|false {}

/**
 * 别名 DateTimeImmutable::createFromFormat
 */
function date_create_immutable_from_format(string $format, string $datetime, ?\DateTimeZone $timezone = NULL): \DateTimeImmutable|false {}

/**
 * 别名 DateTime::setDate
 */
function date_date_set(\DateTime $object, int $year, int $month, int $day): \DateTime {}

/**
 * 取得脚本中所有日期/时间函数所使用的默认时区
 */
function date_default_timezone_get(): string {}

/**
 * 设置脚本中所有日期/时间函数使用的默认时区
 */
function date_default_timezone_set(string $timezoneId): bool {}

/**
 * 别名 DateTime::diff
 */
function date_diff(\DateTimeInterface $baseObject, \DateTimeInterface $targetObject, bool $absolute = false): \DateInterval {}

/**
 * 别名 DateTime::format
 */
function date_format(\DateTimeInterface $object, string $format): string {}

/**
 * 别名 DateTimeImmutable::getLastErrors
 */
function date_get_last_errors(): array|false {}

/**
 * 别名 DateInterval::createFromDateString
 */
function date_interval_create_from_date_string(string $datetime): \DateInterval|false {}

/**
 * 别名 DateInterval::format
 */
function date_interval_format(\DateInterval $object, string $format): string {}

/**
 * 别名 DateTime::setISODate
 */
function date_isodate_set(\DateTime $object, int $year, int $week, int $dayOfWeek = 1): \DateTime {}

/**
 * 别名 DateTime::modify
 */
function date_modify(\DateTime $object, string $modifier): \DateTime|false {}

/**
 * 别名 DateTime::getOffset
 */
function date_offset_get(\DateTimeInterface $object): int {}

/**
 * 返回指定日期/时间的详细信息的关联数组
 */
function date_parse(string $datetime): array {}

/**
 * Get info about given date formatted according to the specified format
 */
function date_parse_from_format(string $format, string $datetime): array {}

/**
 * 别名 DateTime::sub
 */
function date_sub(\DateTime $object, \DateInterval $interval): \DateTime {}

/**
 * Returns an array with information about sunset/sunrise and twilight begin/end
 */
function date_sun_info(int $timestamp, float $latitude, float $longitude): array {}

/**
 * 返回给定的日期与地点的日出时间
 */
function date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude = NULL, ?float $longitude = NULL, ?float $zenith = NULL, ?float $utcOffset = NULL): string|int|float|false {}

/**
 * 返回给定的日期与地点的日落时间
 */
function date_sunset(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude = NULL, ?float $longitude = NULL, ?float $zenith = NULL, ?float $utcOffset = NULL): string|int|float|false {}

/**
 * 别名 DateTime::setTime
 */
function date_time_set(\DateTime $object, int $hour, int $minute, int $second = 0, int $microsecond = 0): \DateTime {}

/**
 * 别名 DateTime::getTimestamp
 */
function date_timestamp_get(\DateTimeInterface $object): int {}

/**
 * 别名 DateTime::setTimestamp
 */
function date_timestamp_set(\DateTime $object, int $timestamp): \DateTime {}

/**
 * 别名 DateTime::getTimezone
 */
function date_timezone_get(\DateTimeInterface $object): \DateTimeZone|false {}

/**
 * 别名 DateTime::setTimezone
 */
function date_timezone_set(\DateTime $object, \DateTimeZone $timezone): \DateTime {}

function datefmt_create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, \IntlTimeZone|\DateTimeZone|string|null $timezone = NULL, \IntlCalendar|int|null $calendar = NULL, ?string $pattern = NULL): ?\IntlDateFormatter {}

function datefmt_format(\IntlDateFormatter $formatter, $datetime): string|false {}

function datefmt_format_object($datetime, $format = NULL, ?string $locale = NULL): string|false {}

function datefmt_get_calendar(\IntlDateFormatter $formatter): int|false {}

function datefmt_get_calendar_object(\IntlDateFormatter $formatter): \IntlCalendar|false|null {}

function datefmt_get_datetype(\IntlDateFormatter $formatter): int|false {}

function datefmt_get_error_code(\IntlDateFormatter $formatter): int {}

function datefmt_get_error_message(\IntlDateFormatter $formatter): string {}

function datefmt_get_locale(\IntlDateFormatter $formatter, int $type = ULOC_ACTUAL_LOCALE): string|false {}

function datefmt_get_pattern(\IntlDateFormatter $formatter): string|false {}

function datefmt_get_timetype(\IntlDateFormatter $formatter): int|false {}

function datefmt_get_timezone(\IntlDateFormatter $formatter): \IntlTimeZone|false {}

function datefmt_get_timezone_id(\IntlDateFormatter $formatter): string|false {}

function datefmt_is_lenient(\IntlDateFormatter $formatter): bool {}

function datefmt_localtime(\IntlDateFormatter $formatter, string $string, &$offset = NULL): array|false {}

function datefmt_parse(\IntlDateFormatter $formatter, string $string, &$offset = NULL): int|float|false {}

function datefmt_set_calendar(\IntlDateFormatter $formatter, \IntlCalendar|int|null $calendar): bool {}

function datefmt_set_lenient(\IntlDateFormatter $formatter, bool $lenient): void {}

function datefmt_set_pattern(\IntlDateFormatter $formatter, string $pattern): bool {}

function datefmt_set_timezone(\IntlDateFormatter $formatter, \IntlTimeZone|\DateTimeZone|string|null $timezone): bool {}

/**
 * Overrides the domain for a single lookup
 */
function dcgettext(string $domain, string $message, int $category): string {}

/**
 * Plural version of dcgettext
 */
function dcngettext(string $domain, string $singular, string $plural, int $count, int $category): string {}

/**
 * 产生一条回溯跟踪(backtrace)
 */
function debug_backtrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array {}

/**
 * 打印一条回溯。
 */
function debug_print_backtrace(int $options = 0, int $limit = 0): void {}

/**
 * 将表示内部 zval 结构的字符串转储到输出
 */
function debug_zval_dump(mixed $value, mixed ...$values): void {}

/**
 * 十进制转换为二进制
 */
function decbin(int $num): string {}

/**
 * 十进制转换为十六进制
 */
function dechex(int $num): string {}

/**
 * 十进制转换为八进制
 */
function decoct(int $num): string {}

/**
 * 定义一个常量
 */
function define(string $constant_name, mixed $value, bool $case_insensitive = false): bool {}

/**
 * 检查给定名称的常量是否存在
 */
function defined(string $constant_name): bool {}

/**
 * Incrementally deflate data
 */
function deflate_add(\DeflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH): string|false {}

/**
 * Initialize an incremental deflate context
 */
function deflate_init(int $encoding, object|array $options = []): \DeflateContext|false {}

/**
 * 将角度转换为弧度
 */
function deg2rad(float $num): float {}

/**
 * Override the current domain
 */
function dgettext(string $domain, string $message): string {}

/**
 * 返回一个 Directory 类实例
 */
function dir(string $directory, $context = NULL): \Directory|false {}

/**
 * 返回路径中的目录部分
 */
function dirname(string $path, int $levels = 1): string {}

/**
 * 返回目录中的可用空间
 */
function disk_free_space(string $directory): float|false {}

/**
 * 返回一个目录的磁盘总大小
 */
function disk_total_space(string $directory): float|false {}

/**
 * disk_free_space 的别名
 */
function diskfreespace(string $directory): float|false {}

/**
 * 运行时载入一个 PHP 扩展
 */
function dl(string $extension_filename): bool {}

/**
 * Plural version of dgettext
 */
function dngettext(string $domain, string $singular, string $plural, int $count): string {}

/**
 * 别名 checkdnsrr
 */
function dns_check_record(string $hostname, string $type = "MX"): bool {}

/**
 * 别名 getmxrr
 */
function dns_get_mx(string $hostname, &$hosts, &$weights = NULL): bool {}

/**
 * 获取指定主机名的 DNS 纪录
 */
function dns_get_record(string $hostname, int $type = DNS_ANY, &$authoritative_name_servers = NULL, &$additional_records = NULL, bool $raw = false): array|false {}

/**
 * Gets a DOMAttr or DOMElement object from a
   SimpleXMLElement object
 */
function dom_import_simplexml(object $node): \DOMAttr|\DOMElement {}

/**
 * 别名 floatval
 */
function doubleval(mixed $value): float {}

/**
 * 得到指定年份的复活节当地午夜时的 Unix 时间戳
 */
function easter_date(?int $year = NULL, int $mode = CAL_EASTER_DEFAULT): int {}

/**
 * 得到指定年份的 3 月 21 日到复活节之间的天数
 */
function easter_days(?int $year = NULL, int $mode = CAL_EASTER_DEFAULT): int {}

/**
 * 将数组的内部指针指向最后一个单元
 */
function end(object|array &$array): mixed {}

/**
 * 检测是否定义对应的枚举 (PHP 8 >= 8.1.0)
 */
function enum_exists(string $enum, bool $autoload = true): bool {}

/**
 * 清除最近一次错误
 */
function error_clear_last(): void {}

/**
 * 获取最后发生的错误
 */
function error_get_last(): ?array {}

/**
 * 发送错误信息到某个地方
 */
function error_log(string $message, int $message_type = 0, ?string $destination = NULL, ?string $additional_headers = NULL): bool {}

/**
 * 设置应该报告何种 PHP 错误
 */
function error_reporting(?int $error_level = NULL): int {}

/**
 * 把字符串转义为可以在 shell 命令里使用的参数
 */
function escapeshellarg(string $arg): string {}

/**
 * shell 元字符转义
 */
function escapeshellcmd(string $command): string {}

/**
 * 执行一个外部程序
 */
function exec(string $command, &$output = NULL, &$result_code = NULL): string|false {}

/**
 * 判断一个图像的类型
 */
function exif_imagetype(string $filename): int|false {}

/**
 * 从一个图片文件中读取 EXIF 头信息
 */
function exif_read_data($file, ?string $required_sections = NULL, bool $as_arrays = false, bool $read_thumbnail = false): array|false {}

/**
 * 获取指定索引的头名称
 */
function exif_tagname(int $index): string|false {}

/**
 * 检索图像的嵌入式缩略图
 */
function exif_thumbnail($file, &$width = NULL, &$height = NULL, &$image_type = NULL): string|false {}

/**
 * 计算 e 的指数
 */
function exp(float $num): float {}

/**
 * 使用一个字符串分割另一个字符串
 */
function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array {}

/**
 * 返回 exp($num) - 1，甚至当 number 的值接近零也能计算出准确结果
 */
function expm1(float $num): float {}

/**
 * 检查一个扩展是否已经加载
 */
function extension_loaded(string $extension): bool {}

/**
 * 从数组中将变量导入到当前的符号表
 */
function extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = ""): int {}

/**
 * 关闭一个已打开的文件指针
 */
function fclose($stream): bool {}

/**
 * 同步文件数据（不包含元数据） (PHP 8 >= 8.1.0)
 */
function fdatasync($stream): bool {}

/**
 * Divides two numbers, according to IEEE 754
 */
function fdiv(float $num1, float $num2): float {}

/**
 * 测试文件指针是否到了文件结束的位置
 */
function feof($stream): bool {}

/**
 * 将缓冲内容输出到文件
 */
function fflush($stream): bool {}

/**
 * 从文件指针中读取字符
 */
function fgetc($stream): string|false {}

/**
 * 从文件指针中读入一行并解析 CSV 字段
 */
function fgetcsv($stream, ?int $length = NULL, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array|false {}

/**
 * 从文件指针中读取一行
 */
function fgets($stream, ?int $length = NULL): string|false {}

/**
 * 把整个文件读入一个数组中
 */
function file(string $filename, int $flags = 0, $context = NULL): array|false {}

/**
 * 检查文件或目录是否存在
 */
function file_exists(string $filename): bool {}

/**
 * 将整个文件读入一个字符串
 */
function file_get_contents(string $filename, bool $use_include_path = false, $context = NULL, int $offset = 0, ?int $length = NULL): string|false {}

/**
 * 将数据写入文件
 */
function file_put_contents(string $filename, mixed $data, int $flags = 0, $context = NULL): int|false {}

/**
 * 取得文件的上次访问时间
 */
function fileatime(string $filename): int|false {}

/**
 * 取得文件的 inode 修改时间
 */
function filectime(string $filename): int|false {}

/**
 * 取得文件的组
 */
function filegroup(string $filename): int|false {}

/**
 * 取得文件的 inode
 */
function fileinode(string $filename): int|false {}

/**
 * 取得文件修改时间
 */
function filemtime(string $filename): int|false {}

/**
 * 取得文件的所有者
 */
function fileowner(string $filename): int|false {}

/**
 * 获取文件权限
 */
function fileperms(string $filename): int|false {}

/**
 * 取得文件大小
 */
function filesize(string $filename): int|false {}

/**
 * 取得文件类型
 */
function filetype(string $filename): string|false {}

/**
 * 检测是否存在指定类型的变量
 */
function filter_has_var(int $input_type, string $var_name): bool {}

/**
 * 返回与某个特定名称的过滤器相关联的id
 */
function filter_id(string $name): int|false {}

/**
 * 通过名称获取特定的外部变量，并且可以通过过滤器处理它
 */
function filter_input(int $type, string $var_name, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

/**
 * 获取一系列外部变量，并且可以通过过滤器处理它们
 */
function filter_input_array(int $type, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false|null {}

/**
 * 返回所支持的过滤器列表
 */
function filter_list(): array {}

/**
 * 使用特定的过滤器过滤一个变量
 */
function filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

/**
 * 获取多个变量并且过滤它们
 */
function filter_var_array(array $array, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false|null {}

/**
 * 返回一个字符串缓冲区的信息
 */
function finfo_buffer(\finfo $finfo, string $string, int $flags = FILEINFO_NONE, $context = NULL): string|false {}

/**
 * 关闭 finfo 实例
 */
function finfo_close(\finfo $finfo): true {}

/**
 * 返回一个文件的信息
 */
function finfo_file(\finfo $finfo, string $filename, int $flags = FILEINFO_NONE, $context = NULL): string|false {}

/**
 * 创建新 finfo 实例
 */
function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = NULL): \finfo|false {}

/**
 * 设置 libmagic 配置选项
 */
function finfo_set_flags(\finfo $finfo, int $flags): true {}

/**
 * 获取变量的浮点值
 */
function floatval(mixed $value): float {}

/**
 * 可移植的协同文件锁定
 */
function flock($stream, int $operation, &$would_block = NULL): bool {}

/**
 * 舍去法取整
 */
function floor(int|float $num): float {}

/**
 * 冲刷系统输出缓冲区
 */
function flush(): void {}

/**
 * 返回除法的浮点数余数
 */
function fmod(float $num1, float $num2): float {}

/**
 * 用模式匹配文件名
 */
function fnmatch(string $pattern, string $filename, int $flags = 0): bool {}

/**
 * 打开文件或者 URL
 */
function fopen(string $filename, string $mode, bool $use_include_path = false, $context = NULL) {}

/**
 * 调用静态方法
 */
function forward_static_call(callable $callback, mixed ...$args): mixed {}

/**
 * 调用静态方法且参数作为数组传递
 */
function forward_static_call_array(callable $callback, array $args): mixed {}

/**
 * 输出文件指针处的所有剩余数据
 */
function fpassthru($stream): int {}

/**
 * Raise one number to the power of another, according to IEEE 754 (PHP 8 >= 8.4.0)
 */
function fpow(float $num, float $exponent): float {}

/**
 * 将格式化后的字符串写入到流
 */
function fprintf($stream, string $format, mixed ...$values): int {}

/**
 * 将行格式化为 CSV 并写入文件指针
 */
function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false {}

/**
 * fwrite 的别名
 */
function fputs($stream, string $data, ?int $length = NULL): int|false {}

/**
 * 读取文件（可安全用于二进制文件）
 */
function fread($stream, int $length): string|false {}

/**
 * 从法国共和历日期转换为儒略日数
 */
function frenchtojd(int $month, int $day, int $year): int {}

/**
 * 从文件中格式化输入
 */
function fscanf($stream, string $format, mixed &...$vars): array|int|false|null {}

/**
 * 在文件指针中定位
 */
function fseek($stream, int $offset, int $whence = SEEK_SET): int {}

/**
 * 打开 Internet 或者 Unix 套接字连接
 */
function fsockopen(string $hostname, int $port = -1, &$error_code = NULL, &$error_message = NULL, ?float $timeout = NULL) {}

/**
 * 通过已打开的文件指针取得文件信息
 */
function fstat($stream): array|false {}

/**
 * 同步文件变更（包括元数据） (PHP 8 >= 8.1.0)
 */
function fsync($stream): bool {}

/**
 * 返回文件指针读/写的位置
 */
function ftell($stream): int|false {}

/**
 * Convert a pathname and a project identifier to a System V IPC key
 */
function ftok(string $filename, string $project_id): int {}

/**
 * 为要上传的文件分配空间
 */
function ftp_alloc(\FTP\Connection $ftp, int $size, &$response = NULL): bool {}

/**
 * 将文件内容追加到 FTP 服务器上的指定文件
 */
function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): bool {}

/**
 * 切换到当前目录的父目录
 */
function ftp_cdup(\FTP\Connection $ftp): bool {}

/**
 * 在 FTP 服务器上改变当前目录
 */
function ftp_chdir(\FTP\Connection $ftp, string $directory): bool {}

/**
 * 设置 FTP 服务器上的文件权限
 */
function ftp_chmod(\FTP\Connection $ftp, int $permissions, string $filename): int|false {}

/**
 * 关闭 FTP 连接
 */
function ftp_close(\FTP\Connection $ftp): bool {}

/**
 * 建立新 FTP 连接
 */
function ftp_connect(string $hostname, int $port = 21, int $timeout = 90): \FTP\Connection|false {}

/**
 * 删除 FTP 服务器上的文件
 */
function ftp_delete(\FTP\Connection $ftp, string $filename): bool {}

/**
 * 在 FTP 服务器运行指定的命令
 */
function ftp_exec(\FTP\Connection $ftp, string $command): bool {}

/**
 * 从 FTP 服务器上下载文件并保存到本地已打开的文件中
 */
function ftp_fget(\FTP\Connection $ftp, $stream, string $remote_filename, int $mode = FTP_BINARY, int $offset = 0): bool {}

/**
 * 上传已打开的文件到 FTP 服务器
 */
function ftp_fput(\FTP\Connection $ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): bool {}

/**
 * 从 FTP 服务器上下载文件
 */
function ftp_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = FTP_BINARY, int $offset = 0): bool {}

/**
 * 返回当前 FTP 连接的各种不同的选项设置
 */
function ftp_get_option(\FTP\Connection $ftp, int $option): int|bool {}

/**
 * 登录 FTP 服务器
 */
function ftp_login(\FTP\Connection $ftp, string $username, string $password): bool {}

/**
 * 返回指定文件的最后修改时间
 */
function ftp_mdtm(\FTP\Connection $ftp, string $filename): int {}

/**
 * 建立新目录
 */
function ftp_mkdir(\FTP\Connection $ftp, string $directory): string|false {}

/**
 * 返回指定目录中的文件列表
 */
function ftp_mlsd(\FTP\Connection $ftp, string $directory): array|false {}

/**
 * 连续获取／发送文件（以不分块的方式 non-blocking）
 */
function ftp_nb_continue(\FTP\Connection $ftp): int {}

/**
 * 从 FTP 服务器获取文件并写入到一个打开的文件（非阻塞）
 */
function ftp_nb_fget(\FTP\Connection $ftp, $stream, string $remote_filename, int $mode = FTP_BINARY, int $offset = 0): int {}

/**
 * 将文件存储到 FTP 服务器 （非阻塞）
 */
function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): int {}

/**
 * 从 FTP 服务器上获取文件并写入本地文件（non-blocking）
 */
function ftp_nb_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = FTP_BINARY, int $offset = 0): int|false {}

/**
 * 存储一个文件至 FTP 服务器（non-blocking）
 */
function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int|false {}

/**
 * 返回给定目录的文件列表
 */
function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false {}

/**
 * 返回当前 FTP 被动模式是否打开
 */
function ftp_pasv(\FTP\Connection $ftp, bool $enable): bool {}

/**
 * 上传文件到 FTP 服务器
 */
function ftp_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): bool {}

/**
 * 返回当前目录名
 */
function ftp_pwd(\FTP\Connection $ftp): string|false {}

/**
 * ftp_close 的 别名
 */
function ftp_quit(\FTP\Connection $ftp): bool {}

/**
 * 向 FTP 服务器发送命令
 */
function ftp_raw(\FTP\Connection $ftp, string $command): ?array {}

/**
 * 返回指定目录下文件的详细列表
 */
function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false {}

/**
 * 更改 FTP 服务器上的文件或目录名
 */
function ftp_rename(\FTP\Connection $ftp, string $from, string $to): bool {}

/**
 * 删除目录
 */
function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool {}

/**
 * 设置各种 FTP 运行时选项
 */
function ftp_set_option(\FTP\Connection $ftp, int $option, $value): true {}

/**
 * 向服务器发送 SITE 命令
 */
function ftp_site(\FTP\Connection $ftp, string $command): bool {}

/**
 * 返回指定文件的大小
 */
function ftp_size(\FTP\Connection $ftp, string $filename): int {}

/**
 * 打开安全 SSL-FTP 连接
 */
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): \FTP\Connection|false {}

/**
 * 返回远程 FTP 服务器的操作系统类型
 */
function ftp_systype(\FTP\Connection $ftp): string|false {}

/**
 * 将文件截断到指定的长度
 */
function ftruncate($stream, int $size): bool {}

/**
 * 返回参数列表的某一项
 */
function func_get_arg(int $position): mixed {}

/**
 * 返回一个包含函数参数列表的数组
 */
function func_get_args(): array {}

/**
 * 返回传递给函数的参数数量
 */
function func_num_args(): int {}

/**
 * 如果给定的函数已经被定义就返回 true
 */
function function_exists(string $function): bool {}

/**
 * 写入文件（可安全用于二进制文件）
 */
function fwrite($stream, string $data, ?int $length = NULL): int|false {}

/**
 * 强制收集所有现存的垃圾循环周期
 */
function gc_collect_cycles(): int {}

/**
 * 停用循环引用收集器
 */
function gc_disable(): void {}

/**
 * 激活循环引用收集器
 */
function gc_enable(): void {}

/**
 * 返回循环引用计数器的状态
 */
function gc_enabled(): bool {}

/**
 * Reclaims memory used by the Zend Engine memory manager
 */
function gc_mem_caches(): int {}

/**
 * 获取有关垃圾回收的信息
 */
function gc_status(): array {}

/**
 * 取得当前安装的 GD 库的信息
 */
function gd_info(): array {}

/**
 * 获取浏览器具有的功能
 */
function get_browser(?string $user_agent = NULL, bool $return_array = false): object|array|false {}

/**
 * 后期静态绑定（&quot;Late Static Binding&quot;）类的名称
 */
function get_called_class(): string {}

/**
 * 获取 PHP 配置选项的值
 */
function get_cfg_var(string $option): array|string|false {}

/**
 * 返回对象的类名
 */
function get_class(object $object = null): string {}

/**
 * 返回由类的方法名组成的数组
 */
function get_class_methods(object|string $object_or_class): array {}

/**
 * 获取类的默认属性
 */
function get_class_vars(string $class): array {}

/**
 * 获取当前 PHP 脚本所有者名称
 */
function get_current_user(): string {}

/**
 * 以适合调试的方式获取变量的类型名称
 */
function get_debug_type(mixed $value): string {}

/**
 * 返回由已定义类的名字所组成的数组
 */
function get_declared_classes(): array {}

/**
 * 返回一个数组包含所有已声明的接口
 */
function get_declared_interfaces(): array {}

/**
 * 返回所有已定义的 traits 的数组
 */
function get_declared_traits(): array {}

/**
 * 返回所有常量的关联数组，键是常量名，值是常量值
 */
function get_defined_constants(bool $categorize = false): array {}

/**
 * 返回所有已定义函数的数组
 */
function get_defined_functions(bool $exclude_disabled = true): array {}

/**
 * 返回由所有已定义变量所组成的数组
 */
function get_defined_vars(): array {}

/**
 * 获取用户定义的错误处理函数 (PHP 8 >= 8.5.0)
 */
function get_error_handler(): ?callable {}

/**
 * 获取用户定义的异常处理函数 (PHP 8 >= 8.5.0)
 */
function get_exception_handler(): ?callable {}

/**
 * 返回模块函数名称的数组
 */
function get_extension_funcs(string $extension): array|false {}

/**
 * 取得服务器响应 HTTP 请求所发送的所有标头
 */
function get_headers(string $url, bool $associative = false, $context = NULL): array|false {}

/**
 * 返回使用 htmlspecialchars 和 htmlentities 后的转换表
 */
function get_html_translation_table(int $table = HTML_SPECIALCHARS, int $flags = 11, string $encoding = "UTF-8"): array {}

/**
 * 获取当前的 include_path 配置选项
 */
function get_include_path(): string|false {}

/**
 * 返回被 include 和 require 文件名的 array
 */
function get_included_files(): array {}

/**
 * 返回所有编译并加载模块名的 array
 */
function get_loaded_extensions(bool $zend_extensions = false): array {}

/**
 * 返回将对象属性混在一起的数组
 */
function get_mangled_object_vars(object $object): array {}

/**
 * 从一个文件中提取所有的 meta 标签 content 属性，返回一个数组
 */
function get_meta_tags(string $filename, bool $use_include_path = false): array|false {}

/**
 * 获取指定对象的属性
 */
function get_object_vars(object $object): array {}

/**
 * 检索对象或者类的父级类名
 */
function get_parent_class(object|string $object_or_class = null): string|false {}

/**
 * 别名 get_included_files
 */
function get_required_files(): array {}

/**
 * 返回给定资源的整数标识符
 */
function get_resource_id($resource): int {}

/**
 * 返回资源类型
 */
function get_resource_type($resource): string {}

/**
 * Returns active resources
 */
function get_resources(?string $type = NULL): array {}

/**
 * 取得当前工作目录
 */
function getcwd(): string|false {}

/**
 * 获取日期/时间信息
 */
function getdate(?int $timestamp = NULL): array {}

/**
 * 获取单个或者全部环境变量
 */
function getenv(?string $name = NULL, bool $local_only = false): array|string|false {}

/**
 * 获取指定 IP 地址对应的 Internet 主机名
 */
function gethostbyaddr(string $ip): string|false {}

/**
 * 返回主机名对应的 IPv4地址。
 */
function gethostbyname(string $hostname): string {}

/**
 * 获取互联网主机名对应的 IPv4 地址列表
 */
function gethostbynamel(string $hostname): array|false {}

/**
 * 获取主机名
 */
function gethostname(): string|false {}

/**
 * 取得图像大小
 */
function getimagesize(string $filename, &$image_info = NULL): array|false {}

/**
 * 从字符串中获取图像尺寸信息
 */
function getimagesizefromstring(string $string, &$image_info = NULL): array|false {}

/**
 * 获取页面最后修改的时间
 */
function getlastmod(): int|false {}

/**
 * 获取 Internet 主机名对应的 MX 记录
 */
function getmxrr(string $hostname, &$hosts, &$weights = NULL): bool {}

/**
 * 获取当前 PHP 脚本拥有者的 GID
 */
function getmygid(): int|false {}

/**
 * 获取当前脚本的索引节点（inode）
 */
function getmyinode(): int|false {}

/**
 * 获取 PHP 进程的 ID
 */
function getmypid(): int|false {}

/**
 * 获取 PHP 脚本所有者的 UID
 */
function getmyuid(): int|false {}

/**
 * 从命令行参数列表中获取选项
 */
function getopt(string $short_options, array $long_options = [], &$rest_index = NULL): array|false {}

/**
 * Get protocol number associated with protocol name
 */
function getprotobyname(string $protocol): int|false {}

/**
 * Get protocol name associated with protocol number
 */
function getprotobynumber(int $protocol): string|false {}

/**
 * 显示随机数最大的可能值
 */
function getrandmax(): int {}

/**
 * 获取当前资源使用状况
 */
function getrusage(int $mode = 0): array|false {}

/**
 * 获取互联网服务协议对应的端口
 */
function getservbyname(string $service, string $protocol): int|false {}

/**
 * Get Internet service which corresponds to port and protocol
 */
function getservbyport(int $port, string $protocol): string|false {}

/**
 * Lookup a message in the current domain
 */
function gettext(string $message): string {}

/**
 * 取得当前时间
 */
function gettimeofday(bool $as_float = false): array|float {}

/**
 * 获取变量的类型
 */
function gettype(mixed $value): string {}

/**
 * 寻找与模式匹配的文件路径
 */
function glob(string $pattern, int $flags = 0): array|false {}

/**
 * 格式化 GMT/UTC 日期／时间
 */
function gmdate(string $format, ?int $timestamp = NULL): string {}

/**
 * 取得 GMT 日期的 UNIX 时间戳
 */
function gmmktime(int $hour, ?int $minute = NULL, ?int $second = NULL, ?int $month = NULL, ?int $day = NULL, ?int $year = NULL): int|false {}

/**
 * Absolute value
 */
function gmp_abs(\GMP|string|int $num): \GMP {}

/**
 * Add numbers
 */
function gmp_add(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Bitwise AND
 */
function gmp_and(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Calculates binomial coefficient
 */
function gmp_binomial(\GMP|string|int $n, int $k): \GMP {}

/**
 * Clear bit
 */
function gmp_clrbit(\GMP $num, int $index): void {}

/**
 * Compare numbers
 */
function gmp_cmp(\GMP|string|int $num1, \GMP|string|int $num2): int {}

/**
 * Calculates one's complement
 */
function gmp_com(\GMP|string|int $num): \GMP {}

/**
 * 别名 gmp_div_q
 */
function gmp_div(\GMP|string|int $num1, \GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO): \GMP {}

/**
 * Divide numbers
 */
function gmp_div_q(\GMP|string|int $num1, \GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO): \GMP {}

/**
 * Divide numbers and get quotient and remainder
 */
function gmp_div_qr(\GMP|string|int $num1, \GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO): array {}

/**
 * Remainder of the division of numbers
 */
function gmp_div_r(\GMP|string|int $num1, \GMP|string|int $num2, int $rounding_mode = GMP_ROUND_ZERO): \GMP {}

/**
 * Exact division of numbers
 */
function gmp_divexact(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Export to a binary string
 */
function gmp_export(\GMP|string|int $num, int $word_size = 1, int $flags = 17): string {}

/**
 * Factorial
 */
function gmp_fact(\GMP|string|int $num): \GMP {}

/**
 * Calculate GCD
 */
function gmp_gcd(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Calculate GCD and multipliers
 */
function gmp_gcdext(\GMP|string|int $num1, \GMP|string|int $num2): array {}

/**
 * Hamming distance
 */
function gmp_hamdist(\GMP|string|int $num1, \GMP|string|int $num2): int {}

/**
 * Import from a binary string
 */
function gmp_import(string $data, int $word_size = 1, int $flags = 17): \GMP {}

/**
 * Create GMP number
 */
function gmp_init(string|int $num, int $base = 0): \GMP {}

/**
 * Convert GMP number to integer
 */
function gmp_intval(\GMP|string|int $num): int {}

/**
 * Inverse by modulo
 */
function gmp_invert(\GMP|string|int $num1, \GMP|string|int $num2): \GMP|false {}

/**
 * Jacobi symbol
 */
function gmp_jacobi(\GMP|string|int $num1, \GMP|string|int $num2): int {}

/**
 * Kronecker symbol
 */
function gmp_kronecker(\GMP|string|int $num1, \GMP|string|int $num2): int {}

/**
 * Calculate LCM
 */
function gmp_lcm(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Legendre symbol
 */
function gmp_legendre(\GMP|string|int $num1, \GMP|string|int $num2): int {}

/**
 * Modulo operation
 */
function gmp_mod(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Multiply numbers
 */
function gmp_mul(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Negate number
 */
function gmp_neg(\GMP|string|int $num): \GMP {}

/**
 * Find next prime number
 */
function gmp_nextprime(\GMP|string|int $num): \GMP {}

/**
 * Bitwise OR
 */
function gmp_or(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Perfect power check
 */
function gmp_perfect_power(\GMP|string|int $num): bool {}

/**
 * Perfect square check
 */
function gmp_perfect_square(\GMP|string|int $num): bool {}

/**
 * Population count
 */
function gmp_popcount(\GMP|string|int $num): int {}

/**
 * Raise number into power
 */
function gmp_pow(\GMP|string|int $num, int $exponent): \GMP {}

/**
 * Raise number into power with modulo
 */
function gmp_powm(\GMP|string|int $num, \GMP|string|int $exponent, \GMP|string|int $modulus): \GMP {}

/**
 * Check if number is &quot;probably prime&quot;
 */
function gmp_prob_prime(\GMP|string|int $num, int $repetitions = 10): int {}

/**
 * Random number
 */
function gmp_random_bits(int $bits): \GMP {}

/**
 * Get a uniformly selected integer
 */
function gmp_random_range(\GMP|string|int $min, \GMP|string|int $max): \GMP {}

/**
 * Sets the RNG seed
 */
function gmp_random_seed(\GMP|string|int $seed): void {}

/**
 * Take the integer part of nth root
 */
function gmp_root(\GMP|string|int $num, int $nth): \GMP {}

/**
 * Take the integer part and remainder of nth root
 */
function gmp_rootrem(\GMP|string|int $num, int $nth): array {}

/**
 * Scan for 0
 */
function gmp_scan0(\GMP|string|int $num1, int $start): int {}

/**
 * Scan for 1
 */
function gmp_scan1(\GMP|string|int $num1, int $start): int {}

/**
 * Set bit
 */
function gmp_setbit(\GMP $num, int $index, bool $value = true): void {}

/**
 * Sign of number
 */
function gmp_sign(\GMP|string|int $num): int {}

/**
 * Calculate square root
 */
function gmp_sqrt(\GMP|string|int $num): \GMP {}

/**
 * Square root with remainder
 */
function gmp_sqrtrem(\GMP|string|int $num): array {}

/**
 * Convert GMP number to string
 */
function gmp_strval(\GMP|string|int $num, int $base = 10): string {}

/**
 * Subtract numbers
 */
function gmp_sub(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * Tests if a bit is set
 */
function gmp_testbit(\GMP|string|int $num, int $index): bool {}

/**
 * Bitwise XOR
 */
function gmp_xor(\GMP|string|int $num1, \GMP|string|int $num2): \GMP {}

/**
 * 根据区域设置格式化 GMT/UTC 时间/日期
 */
function gmstrftime(string $format, ?int $timestamp = NULL): string|false {}

/**
 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8
 */
function grapheme_extract(string $haystack, int $size, int $type = GRAPHEME_EXTR_COUNT, int $offset = 0, &$next = NULL): string|false {}

/**
 * Calculate Levenshtein distance between two strings in grapheme units
 */
function grapheme_levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1, string $locale = ""): int|false {}

/**
 * Split a string into an array (PHP 8 >= 8.4.0)
 */
function grapheme_str_split(string $string, int $length = 1): array|false {}

/**
 * Find position (in grapheme units) of first occurrence of a case-insensitive string
 */
function grapheme_stripos(string $haystack, string $needle, int $offset = 0, string $locale = ""): int|false {}

/**
 * Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack
 */
function grapheme_stristr(string $haystack, string $needle, bool $beforeNeedle = false, string $locale = ""): string|false {}

/**
 * Get string length in grapheme units
 */
function grapheme_strlen(string $string): int|false|null {}

/**
 * Find position (in grapheme units) of first occurrence of a string
 */
function grapheme_strpos(string $haystack, string $needle, int $offset = 0, string $locale = ""): int|false {}

/**
 * Find position (in grapheme units) of last occurrence of a case-insensitive string
 */
function grapheme_strripos(string $haystack, string $needle, int $offset = 0, string $locale = ""): int|false {}

/**
 * Find position (in grapheme units) of last occurrence of a string
 */
function grapheme_strrpos(string $haystack, string $needle, int $offset = 0, string $locale = ""): int|false {}

/**
 * Returns part of haystack string from the first occurrence of needle to the end of haystack
 */
function grapheme_strstr(string $haystack, string $needle, bool $beforeNeedle = false, string $locale = ""): string|false {}

/**
 * Return part of a string
 */
function grapheme_substr(string $string, int $offset, ?int $length = NULL, string $locale = ""): string|false {}

/**
 * 将公历日期转为儒略日数
 */
function gregoriantojd(int $month, int $day, int $year): int {}

/**
 * Close an open gz-file pointer
 */
function gzclose($stream): bool {}

/**
 * Compress a string
 */
function gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE): string|false {}

/**
 * Decodes a gzip compressed string
 */
function gzdecode(string $data, int $max_length = 0): string|false {}

/**
 * Deflate a string
 */
function gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW): string|false {}

/**
 * Create a gzip compressed string
 */
function gzencode(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_GZIP): string|false {}

/**
 * Test for EOF on a gz-file pointer
 */
function gzeof($stream): bool {}

/**
 * Read entire gz-file into an array
 */
function gzfile(string $filename, bool $use_include_path = false): array|false {}

/**
 * Get character from gz-file pointer
 */
function gzgetc($stream): string|false {}

/**
 * Get line from file pointer
 */
function gzgets($stream, ?int $length = NULL): string|false {}

/**
 * Inflate a deflated string
 */
function gzinflate(string $data, int $max_length = 0): string|false {}

/**
 * Open gz-file
 */
function gzopen(string $filename, string $mode, bool $use_include_path = false) {}

/**
 * Output all remaining data on a gz-file pointer
 */
function gzpassthru($stream): int {}

/**
 * 别名 gzwrite
 */
function gzputs($stream, string $data, ?int $length = NULL): int|false {}

/**
 * Binary-safe gz-file read
 */
function gzread($stream, int $length): string|false {}

/**
 * Rewind the position of a gz-file pointer
 */
function gzrewind($stream): bool {}

/**
 * Seek on a gz-file pointer
 */
function gzseek($stream, int $offset, int $whence = SEEK_SET): int {}

/**
 * Tell gz-file pointer read/write position
 */
function gztell($stream): int|false {}

/**
 * Uncompress a compressed string
 */
function gzuncompress(string $data, int $max_length = 0): string|false {}

/**
 * Binary-safe gz-file write
 */
function gzwrite($stream, string $data, ?int $length = NULL): int|false {}

/**
 * 生成散列值（消息摘要）
 */
function hash(string $algo, string $data, bool $binary = false, array $options = []): string {}

/**
 * 返回已注册的散列算法列表
 */
function hash_algos(): array {}

/**
 * 拷贝哈希运算上下文
 */
function hash_copy(\HashContext $context): \HashContext {}

/**
 * 可防止时序攻击的字符串比较
 */
function hash_equals(string $known_string, string $user_string): bool {}

/**
 * 给指定文件的内容生成散列值
 */
function hash_file(string $algo, string $filename, bool $binary = false, array $options = []): string|false {}

/**
 * 结束增量散列且返回摘要结果
 */
function hash_final(\HashContext $context, bool $binary = false): string {}

/**
 * Generate a HKDF key derivation of a supplied key input
 */
function hash_hkdf(string $algo, string $key, int $length = 0, string $info = "", string $salt = ""): string {}

/**
 * 使用 HMAC 方法生成带有密钥的散列值
 */
function hash_hmac(string $algo, string $data, string $key, bool $binary = false): string {}

/**
 * 返回适用于 hash_hmac 的已注册散列算法列表
 */
function hash_hmac_algos(): array {}

/**
 * 使用 HMAC 方法和给定文件的内容生成带密钥的散列值
 */
function hash_hmac_file(string $algo, string $filename, string $key, bool $binary = false): string|false {}

/**
 * 初始化增量散列运算上下文
 */
function hash_init(string $algo, int $flags = 0, string $key = "", array $options = []): \HashContext {}

/**
 * 生成所提供密码的 PBKDF2 密钥导出
 */
function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string {}

/**
 * 向活跃的哈希运算上下文中填充数据
 */
function hash_update(\HashContext $context, string $data): true {}

/**
 * 从文件向活跃的散列运算上下文中填充数据
 */
function hash_update_file(\HashContext $context, string $filename, $stream_context = NULL): bool {}

/**
 * 从打开的流向活跃的散列运算上下文中填充数据
 */
function hash_update_stream(\HashContext $context, $stream, int $length = -1): int {}

/**
 * 发送原生 HTTP 头
 */
function header(string $header, bool $replace = true, int $response_code = 0): void {}

/**
 * 调用一个 header 函数
 */
function header_register_callback(callable $callback): bool {}

/**
 * 删除之前设置的 HTTP 头
 */
function header_remove(?string $name = NULL): void {}

/**
 * 返回已发送的 HTTP 响应头（或准备发送的）
 */
function headers_list(): array {}

/**
 * 检测消息头是否已经发送
 */
function headers_sent(&$filename = NULL, &$line = NULL): bool {}

/**
 * 将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew）
 */
function hebrev(string $string, int $max_chars_per_line = 0): string {}

/**
 * 转换十六进制字符串为二进制字符串
 */
function hex2bin(string $string): string|false {}

/**
 * 十六进制转换为十进制
 */
function hexdec(string $hex_string): int|float {}

/**
 * 语法高亮一个文件
 */
function highlight_file(string $filename, bool $return = false): string|bool {}

/**
 * 字符串的语法高亮
 */
function highlight_string(string $string, bool $return = false): string|true {}

/**
 * 获取系统的高精度时间
 */
function hrtime(bool $as_number = false): array|int|float|false {}

/**
 * Convert HTML entities to their corresponding characters
 */
function html_entity_decode(string $string, int $flags = 11, ?string $encoding = NULL): string {}

/**
 * 将字符转换为 HTML 转义字符
 */
function htmlentities(string $string, int $flags = 11, ?string $encoding = NULL, bool $double_encode = true): string {}

/**
 * 将特殊字符转换为 HTML 实体
 */
function htmlspecialchars(string $string, int $flags = 11, ?string $encoding = NULL, bool $double_encode = true): string {}

/**
 * 将特殊的 HTML 实体转换回普通字符
 */
function htmlspecialchars_decode(string $string, int $flags = 11): string {}

/**
 * 生成 URL-encode 之后的请求字符串
 */
function http_build_query(object|array $data, string $numeric_prefix = "", ?string $arg_separator = NULL, int $encoding_type = PHP_QUERY_RFC1738): string {}

/**
 * Clears the stored HTTP response headers (PHP 8 >= 8.4.0)
 */
function http_clear_last_response_headers(): void {}

/**
 * Retrieve last HTTP response headers (PHP 8 >= 8.4.0)
 */
function http_get_last_response_headers(): ?array {}

/**
 * 获取/设置响应的 HTTP 状态码
 */
function http_response_code(int $response_code = 0): int|bool {}

/**
 * 计算直角三角形的斜边长度
 */
function hypot(float $x, float $y): float {}

/**
 * 将字符串从一个字符编码转换到另一个字符编码
 */
function iconv(string $from_encoding, string $to_encoding, string $string): string|false {}

/**
 * 获取 iconv 扩展的内部配置变量
 */
function iconv_get_encoding(string $type = "all"): array|string|false {}

/**
 * 解码一个MIME头字段
 */
function iconv_mime_decode(string $string, int $mode = 0, ?string $encoding = NULL): string|false {}

/**
 * 一次性解码多个 MIME 头字段
 */
function iconv_mime_decode_headers(string $headers, int $mode = 0, ?string $encoding = NULL): array|false {}

/**
 * Composes a MIME header field
 */
function iconv_mime_encode(string $field_name, string $field_value, array $options = []): string|false {}

/**
 * 为字符编码转换设定当前设置
 */
function iconv_set_encoding(string $type, string $encoding): bool {}

/**
 * 返回字符串的字符数统计
 */
function iconv_strlen(string $string, ?string $encoding = NULL): int|false {}

/**
 * Finds position of first occurrence of a needle within a haystack
 */
function iconv_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): int|false {}

/**
 * Finds the last occurrence of a needle within a haystack
 */
function iconv_strrpos(string $haystack, string $needle, ?string $encoding = NULL): int|false {}

/**
 * 截取字符串的部分
 */
function iconv_substr(string $string, int $offset, ?int $length = NULL, ?string $encoding = NULL): string|false {}

/**
 * 将本地日期/时间格式化为整数
 */
function idate(string $format, ?int $timestamp = NULL): int|false {}

/**
 * 将域名转换为 IDNA ASCII 格式
 */
function idn_to_ascii(string $domain, int $flags = IDNA_DEFAULT, int $variant = INTL_IDNA_VARIANT_UTS46, &$idna_info = NULL): string|false {}

/**
 * 将域名从 IDNA ASCII 转换为 Unicode
 */
function idn_to_utf8(string $domain, int $flags = IDNA_DEFAULT, int $variant = INTL_IDNA_VARIANT_UTS46, &$idna_info = NULL): string|false {}

/**
 * 设置客户端断开连接时是否中断脚本的执行
 */
function ignore_user_abort(?bool $enable = NULL): int {}

/**
 * 取得图像类型的文件后缀
 */
function image_type_to_extension(int $image_type, bool $include_dot = true): string|false {}

/**
 * 取得 getimagesize、exif_read_data、exif_thumbnail、exif_imagetype 所返回的图像类型的 MIME 类型
 */
function image_type_to_mime_type(int $image_type): string {}

/**
 * 返回经过仿射变换后的图像，剪切区域可选
 */
function imageaffine(\GdImage $image, array $affine, ?array $clip = NULL): \GdImage|false {}

/**
 * Concatenate two affine transformation matrices
 */
function imageaffinematrixconcat(array $matrix1, array $matrix2): array|false {}

/**
 * Get an affine transformation matrix
 */
function imageaffinematrixget(int $type, $options): array|false {}

/**
 * 设定图像的混色模式
 */
function imagealphablending(\GdImage $image, bool $enable): true {}

/**
 * 是否使用抗锯齿（antialias）功能
 */
function imageantialias(\GdImage $image, bool $enable): true {}

/**
 * 画弧线
 */
function imagearc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color): true {}

/**
 * 输出图象到浏览器或文件。 (PHP 8 >= 8.1.0)
 */
function imageavif(\GdImage $image, $file = NULL, int $quality = -1, int $speed = -1): bool {}

/**
 * Output a BMP image to browser or file
 */
function imagebmp(\GdImage $image, $file = NULL, bool $compressed = true): bool {}

/**
 * 水平地绘制一个字符
 */
function imagechar(\GdImage $image, \GdFont|int $font, int $x, int $y, string $char, int $color): true {}

/**
 * 垂直地绘制一个字符
 */
function imagecharup(\GdImage $image, \GdFont|int $font, int $x, int $y, string $char, int $color): true {}

/**
 * 为图像分配颜色
 */
function imagecolorallocate(\GdImage $image, int $red, int $green, int $blue): int|false {}

/**
 * 为图像分配颜色
 */
function imagecolorallocatealpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int|false {}

/**
 * 取得某像素的颜色索引值
 */
function imagecolorat(\GdImage $image, int $x, int $y): int|false {}

/**
 * 取得与指定的颜色最接近的颜色索引值
 */
function imagecolorclosest(\GdImage $image, int $red, int $green, int $blue): int {}

/**
 * 获取最接近指定颜色 + alpha 的颜色索引
 */
function imagecolorclosestalpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * 取得与给定颜色最接近的色度的黑白色的索引
 */
function imagecolorclosesthwb(\GdImage $image, int $red, int $green, int $blue): int {}

/**
 * 取消图像颜色的分配
 */
function imagecolordeallocate(\GdImage $image, int $color): true {}

/**
 * 取得指定颜色的索引值
 */
function imagecolorexact(\GdImage $image, int $red, int $green, int $blue): int {}

/**
 * 取得指定的颜色加透明度的索引值
 */
function imagecolorexactalpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * 使一个图像中调色板版本的颜色与真彩色版本更能匹配
 */
function imagecolormatch(\GdImage $image1, \GdImage $image2): true {}

/**
 * 取得指定颜色的索引值或有可能得到的最接近的替代值
 */
function imagecolorresolve(\GdImage $image, int $red, int $green, int $blue): int {}

/**
 * 取得指定颜色 + alpha 或其最接近的替代值
 */
function imagecolorresolvealpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * 给指定调色板索引设定颜色
 */
function imagecolorset(\GdImage $image, int $color, int $red, int $green, int $blue, int $alpha = 0): ?false {}

/**
 * 获取索引的颜色
 */
function imagecolorsforindex(\GdImage $image, int $color): array {}

/**
 * 取得图像调色板中的颜色数量
 */
function imagecolorstotal(\GdImage $image): int {}

/**
 * 将颜色定义为透明
 */
function imagecolortransparent(\GdImage $image, ?int $color = NULL): int {}

/**
 * 用系数 div 和 offset 申请一个 3x3 的卷积矩阵
 */
function imageconvolution(\GdImage $image, array $matrix, float $divisor, float $offset): bool {}

/**
 * 拷贝图像的一部分
 */
function imagecopy(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height): true {}

/**
 * 拷贝并合并图像的一部分
 */
function imagecopymerge(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): true {}

/**
 * 用灰度复制并合并图像的一部分
 */
function imagecopymergegray(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): true {}

/**
 * 重采样拷贝部分图像并调整大小
 */
function imagecopyresampled(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height): true {}

/**
 * 拷贝部分图像并调整大小
 */
function imagecopyresized(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height): true {}

/**
 * 创建新的基于调色板的图像
 */
function imagecreate(int $width, int $height): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。 (PHP 8 >= 8.1.0)
 */
function imagecreatefromavif(string $filename): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefrombmp(string $filename): \GdImage|false {}

/**
 * 从 GD 文件或 URL 新建一图像
 */
function imagecreatefromgd(string $filename): \GdImage|false {}

/**
 * 从 GD2 文件或 URL 新建一图像
 */
function imagecreatefromgd2(string $filename): \GdImage|false {}

/**
 * 从指定的 GD2 文件或 URL 的部分创建新图像
 */
function imagecreatefromgd2part(string $filename, int $x, int $y, int $width, int $height): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefromgif(string $filename): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefromjpeg(string $filename): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefrompng(string $filename): \GdImage|false {}

/**
 * 从字符串的图像流中新建图像
 */
function imagecreatefromstring(string $data): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefromtga(string $filename): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefromwbmp(string $filename): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefromwebp(string $filename): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefromxbm(string $filename): \GdImage|false {}

/**
 * 由文件或 URL 创建一个新图象。
 */
function imagecreatefromxpm(string $filename): \GdImage|false {}

/**
 * 新建真彩色图像
 */
function imagecreatetruecolor(int $width, int $height): \GdImage|false {}

/**
 * Crop an image to the given rectangle
 */
function imagecrop(\GdImage $image, array $rectangle): \GdImage|false {}

/**
 * Crop an image automatically using one of the available modes
 */
function imagecropauto(\GdImage $image, int $mode = IMG_CROP_DEFAULT, float $threshold = 0.5, int $color = -1): \GdImage|false {}

/**
 * 绘制虚线
 */
function imagedashedline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {}

/**
 * 销毁图像
 */
function imagedestroy(\GdImage $image): true {}

/**
 * 画椭圆
 */
function imageellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): true {}

/**
 * 漫水填充
 */
function imagefill(\GdImage $image, int $x, int $y, int $color): true {}

/**
 * 绘制部分弧形并填充
 */
function imagefilledarc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color, int $style): true {}

/**
 * 绘制椭圆并填充
 */
function imagefilledellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): true {}

/**
 * 绘制多边形并填充
 */
function imagefilledpolygon(\GdImage $image, array $points, int $num_points_or_color, ?int $color = NULL): bool {}

/**
 * 绘制矩形并填充
 */
function imagefilledrectangle(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {}

/**
 * 漫水填充特定颜色
 */
function imagefilltoborder(\GdImage $image, int $x, int $y, int $border_color, int $color): true {}

/**
 * 对图像使用过滤器
 */
function imagefilter(\GdImage $image, int $filter, ...$args): bool {}

/**
 * Flips an image using a given mode
 */
function imageflip(\GdImage $image, int $mode): true {}

/**
 * 获取字体高度
 */
function imagefontheight(\GdFont|int $font): int {}

/**
 * 获取字体宽度
 */
function imagefontwidth(\GdFont|int $font): int {}

/**
 * 通过 freetype2 使用字体给出文本的边界框
 */
function imageftbbox(float $size, float $angle, string $font_filename, string $string, array $options = []): array|false {}

/**
 * 使用 FreeType 2 字体将文本写入图像
 */
function imagefttext(\GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []): array|false {}

/**
 * 对 GD 图像应用伽玛校正
 */
function imagegammacorrect(\GdImage $image, float $input_gamma, float $output_gamma): true {}

/**
 * 将 GD 图像输出到浏览器或文件
 */
function imagegd(\GdImage $image, ?string $file = NULL): bool {}

/**
 * 将 GD2 图像输出到浏览器或文件
 */
function imagegd2(\GdImage $image, ?string $file = NULL, int $chunk_size = 128, int $mode = IMG_GD2_RAW): bool {}

/**
 * Get the clipping rectangle
 */
function imagegetclip(\GdImage $image): array {}

/**
 * Get the interpolation method
 */
function imagegetinterpolation(\GdImage $image): int {}

/**
 * 输出图象到浏览器或文件。
 */
function imagegif(\GdImage $image, $file = NULL): bool {}

/**
 * Captures the whole screen
 */
function imagegrabscreen(): \GdImage|false {}

/**
 * Captures a window
 */
function imagegrabwindow(int $handle, bool $client_area = false): \GdImage|false {}

/**
 * 启用或禁用隔行扫描
 */
function imageinterlace(\GdImage $image, ?bool $enable = NULL): bool {}

/**
 * 检查图像是否为真彩色图像
 */
function imageistruecolor(\GdImage $image): bool {}

/**
 * 输出图象到浏览器或文件。
 */
function imagejpeg(\GdImage $image, $file = NULL, int $quality = -1): bool {}

/**
 * 设定 alpha 混合标志以使用分层效果
 */
function imagelayereffect(\GdImage $image, int $effect): true {}

/**
 * 绘制直线
 */
function imageline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {}

/**
 * 载入新字体
 */
function imageloadfont(string $filename): \GdFont|false {}

/**
 * Draws an open polygon
 */
function imageopenpolygon(\GdImage $image, array $points, int $num_points_or_color, ?int $color = NULL): bool {}

/**
 * 将调色板从一个图像复制到另一个
 */
function imagepalettecopy(\GdImage $dst, \GdImage $src): void {}

/**
 * Converts a palette based image to true color
 */
function imagepalettetotruecolor(\GdImage $image): bool {}

/**
 * 将 PNG 图像输出到浏览器或文件
 */
function imagepng(\GdImage $image, $file = NULL, int $quality = -1, int $filters = -1): bool {}

/**
 * 绘制多边形
 */
function imagepolygon(\GdImage $image, array $points, int $num_points_or_color, ?int $color = NULL): bool {}

/**
 * 绘制矩形
 */
function imagerectangle(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {}

/**
 * Get or set the resolution of the image
 */
function imageresolution(\GdImage $image, ?int $resolution_x = NULL, ?int $resolution_y = NULL): array|true {}

/**
 * 用给定角度旋转图像
 */
function imagerotate(\GdImage $image, float $angle, int $background_color): \GdImage|false {}

/**
 * 保存图像时是否保留完整的 alpha 通道信息
 */
function imagesavealpha(\GdImage $image, bool $enable): true {}

/**
 * Scale an image using the given new width and height
 */
function imagescale(\GdImage $image, int $width, int $height = -1, int $mode = IMG_BILINEAR_FIXED): \GdImage|false {}

/**
 * 为线条设置笔刷图像
 */
function imagesetbrush(\GdImage $image, \GdImage $brush): true {}

/**
 * Set the clipping rectangle
 */
function imagesetclip(\GdImage $image, int $x1, int $y1, int $x2, int $y2): true {}

/**
 * Set the interpolation method
 */
function imagesetinterpolation(\GdImage $image, int $method = IMG_BILINEAR_FIXED): bool {}

/**
 * 设置单个像素
 */
function imagesetpixel(\GdImage $image, int $x, int $y, int $color): true {}

/**
 * 设定线条的样式
 */
function imagesetstyle(\GdImage $image, array $style): bool {}

/**
 * 设定画线的粗细
 */
function imagesetthickness(\GdImage $image, int $thickness): true {}

/**
 * 设置要填充的平铺图像
 */
function imagesettile(\GdImage $image, \GdImage $tile): true {}

/**
 * 水平绘制字符串
 */
function imagestring(\GdImage $image, \GdFont|int $font, int $x, int $y, string $string, int $color): true {}

/**
 * 垂直绘制字符串
 */
function imagestringup(\GdImage $image, \GdFont|int $font, int $x, int $y, string $string, int $color): true {}

/**
 * 取得图像宽度
 */
function imagesx(\GdImage $image): int {}

/**
 * 取得图像高度
 */
function imagesy(\GdImage $image): int {}

/**
 * 将真彩色图像转换为调色板图像
 */
function imagetruecolortopalette(\GdImage $image, bool $dither, int $num_colors): bool {}

/**
 * 取得使用 TrueType 字体的文本的边界框
 */
function imagettfbbox(float $size, float $angle, string $font_filename, string $string, array $options = []): array|false {}

/**
 * 用 TrueType 字体向图像写入文本
 */
function imagettftext(\GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []): array|false {}

/**
 * 返回 PHP 内置支持的图像类型
 */
function imagetypes(): int {}

/**
 * 输出图象到浏览器或文件。
 */
function imagewbmp(\GdImage $image, $file = NULL, ?int $foreground_color = NULL): bool {}

/**
 * 将 WebP 格式的图像输出到浏览器或文件
 */
function imagewebp(\GdImage $image, $file = NULL, int $quality = -1): bool {}

/**
 * 输出 XBM 图像到浏览器或文件
 */
function imagexbm(\GdImage $image, ?string $filename, ?int $foreground_color = NULL): bool {}

/**
 * 用字符串连接数组元素
 */
function implode(array|string $separator, ?array $array = NULL): string {}

/**
 * 检查数组中是否存在某个值
 */
function in_array(mixed $needle, array $haystack, bool $strict = false): bool {}

/**
 * Converts a packed internet address to a human readable representation
 */
function inet_ntop(string $ip): string|false {}

/**
 * Converts a human readable IP address to its packed in_addr representation
 */
function inet_pton(string $ip): string|false {}

/**
 * Incrementally inflate encoded data
 */
function inflate_add(\InflateContext $context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH): string|false {}

/**
 * Get number of bytes read so far
 */
function inflate_get_read_len(\InflateContext $context): int {}

/**
 * Get decompression status
 */
function inflate_get_status(\InflateContext $context): int {}

/**
 * Initialize an incremental inflate context
 */
function inflate_init(int $encoding, object|array $options = []): \InflateContext|false {}

/**
 * 别名 ini_set
 */
function ini_alter(string $option, string|int|float|bool|null $value): string|false {}

/**
 * 获取一个配置选项的值
 */
function ini_get(string $option): string|false {}

/**
 * 获取所有配置选项
 */
function ini_get_all(?string $extension = NULL, bool $details = true): array|false {}

/**
 * Get interpreted size from ini shorthand syntax (PHP 8 >= 8.2.0)
 */
function ini_parse_quantity(string $shorthand): int {}

/**
 * 恢复配置选项的值
 */
function ini_restore(string $option): void {}

/**
 * 为一个配置选项设置值
 */
function ini_set(string $option, string|int|float|bool|null $value): string|false {}

/**
 * 对除法结果取整
 */
function intdiv(int $num1, int $num2): int {}

/**
 * 检查接口是否已被定义
 */
function interface_exists(string $interface, bool $autoload = true): bool {}

/**
 * Get symbolic name for a given error code
 */
function intl_error_name(int $errorCode): string {}

/**
 * Get the last error code
 */
function intl_get_error_code(): int {}

/**
 * Get description of the last error
 */
function intl_get_error_message(): string {}

/**
 * Check whether the given error code indicates failure
 */
function intl_is_failure(int $errorCode): bool {}

function intlcal_add(\IntlCalendar $calendar, int $field, int $value): bool {}

function intlcal_after(\IntlCalendar $calendar, \IntlCalendar $other): bool {}

function intlcal_before(\IntlCalendar $calendar, \IntlCalendar $other): bool {}

function intlcal_clear(\IntlCalendar $calendar, ?int $field = NULL): true {}

function intlcal_create_instance(\IntlTimeZone|\DateTimeZone|string|null $timezone = NULL, ?string $locale = NULL): ?\IntlCalendar {}

function intlcal_equals(\IntlCalendar $calendar, \IntlCalendar $other): bool {}

function intlcal_field_difference(\IntlCalendar $calendar, float $timestamp, int $field): int|false {}

function intlcal_from_date_time(\DateTime|string $datetime, ?string $locale = NULL): ?\IntlCalendar {}

function intlcal_get(\IntlCalendar $calendar, int $field): int|false {}

function intlcal_get_actual_maximum(\IntlCalendar $calendar, int $field): int|false {}

function intlcal_get_actual_minimum(\IntlCalendar $calendar, int $field): int|false {}

function intlcal_get_available_locales(): array {}

function intlcal_get_day_of_week_type(\IntlCalendar $calendar, int $dayOfWeek): int|false {}

function intlcal_get_error_code(\IntlCalendar $calendar): int|false {}

function intlcal_get_error_message(\IntlCalendar $calendar): string|false {}

function intlcal_get_first_day_of_week(\IntlCalendar $calendar): int|false {}

function intlcal_get_greatest_minimum(\IntlCalendar $calendar, int $field): int|false {}

function intlcal_get_keyword_values_for_locale(string $keyword, string $locale, bool $onlyCommon): \IntlIterator|false {}

function intlcal_get_least_maximum(\IntlCalendar $calendar, int $field): int|false {}

function intlcal_get_locale(\IntlCalendar $calendar, int $type): string|false {}

function intlcal_get_maximum(\IntlCalendar $calendar, int $field): int|false {}

function intlcal_get_minimal_days_in_first_week(\IntlCalendar $calendar): int|false {}

function intlcal_get_minimum(\IntlCalendar $calendar, int $field): int|false {}

function intlcal_get_now(): float {}

function intlcal_get_repeated_wall_time_option(\IntlCalendar $calendar): int {}

function intlcal_get_skipped_wall_time_option(\IntlCalendar $calendar): int {}

function intlcal_get_time(\IntlCalendar $calendar): float|false {}

function intlcal_get_time_zone(\IntlCalendar $calendar): \IntlTimeZone|false {}

function intlcal_get_type(\IntlCalendar $calendar): string {}

function intlcal_get_weekend_transition(\IntlCalendar $calendar, int $dayOfWeek): int|false {}

function intlcal_in_daylight_time(\IntlCalendar $calendar): bool {}

function intlcal_is_equivalent_to(\IntlCalendar $calendar, \IntlCalendar $other): bool {}

function intlcal_is_lenient(\IntlCalendar $calendar): bool {}

function intlcal_is_set(\IntlCalendar $calendar, int $field): bool {}

function intlcal_is_weekend(\IntlCalendar $calendar, ?float $timestamp = NULL): bool {}

function intlcal_roll(\IntlCalendar $calendar, int $field, $value): bool {}

function intlcal_set(\IntlCalendar $calendar, int $year, int $month, int $dayOfMonth = null, int $hour = null, int $minute = null, int $second = null): true {}

function intlcal_set_first_day_of_week(\IntlCalendar $calendar, int $dayOfWeek): true {}

function intlcal_set_lenient(\IntlCalendar $calendar, bool $lenient): true {}

function intlcal_set_minimal_days_in_first_week(\IntlCalendar $calendar, int $days): true {}

function intlcal_set_repeated_wall_time_option(\IntlCalendar $calendar, int $option): true {}

function intlcal_set_skipped_wall_time_option(\IntlCalendar $calendar, int $option): true {}

function intlcal_set_time(\IntlCalendar $calendar, float $timestamp): bool {}

function intlcal_set_time_zone(\IntlCalendar $calendar, \IntlTimeZone|\DateTimeZone|string|null $timezone): bool {}

function intlcal_to_date_time(\IntlCalendar $calendar): \DateTime|false {}

function intlgregcal_create_instance($timezoneOrYear = null, $localeOrMonth = null, $day = null, $hour = null, $minute = null, $second = null): ?\IntlGregorianCalendar {}

function intlgregcal_get_gregorian_change(\IntlGregorianCalendar $calendar): float {}

function intlgregcal_is_leap_year(\IntlGregorianCalendar $calendar, int $year): bool {}

function intlgregcal_set_gregorian_change(\IntlGregorianCalendar $calendar, float $timestamp): bool {}

function intltz_count_equivalent_ids(string $timezoneId): int|false {}

function intltz_create_default(): \IntlTimeZone {}

function intltz_create_enumeration(string|int|null $countryOrRawOffset = NULL): \IntlIterator|false {}

function intltz_create_time_zone(string $timezoneId): ?\IntlTimeZone {}

function intltz_create_time_zone_id_enumeration(int $type, ?string $region = NULL, ?int $rawOffset = NULL): \IntlIterator|false {}

function intltz_from_date_time_zone(\DateTimeZone $timezone): ?\IntlTimeZone {}

function intltz_get_canonical_id(string $timezoneId, &$isSystemId = NULL): string|false {}

function intltz_get_display_name(\IntlTimeZone $timezone, bool $dst = false, int $style = IntlTimeZone::DISPLAY_LONG, ?string $locale = NULL): string|false {}

function intltz_get_dst_savings(\IntlTimeZone $timezone): int {}

function intltz_get_equivalent_id(string $timezoneId, int $offset): string|false {}

function intltz_get_error_code(\IntlTimeZone $timezone): int|false {}

function intltz_get_error_message(\IntlTimeZone $timezone): string|false {}

function intltz_get_gmt(): \IntlTimeZone {}

function intltz_get_iana_id(string $timezoneId): string|false {}

function intltz_get_id(\IntlTimeZone $timezone): string|false {}

function intltz_get_id_for_windows_id(string $timezoneId, ?string $region = NULL): string|false {}

function intltz_get_offset(\IntlTimeZone $timezone, float $timestamp, bool $local, &$rawOffset, &$dstOffset): bool {}

function intltz_get_raw_offset(\IntlTimeZone $timezone): int {}

function intltz_get_region(string $timezoneId): string|false {}

function intltz_get_tz_data_version(): string|false {}

function intltz_get_unknown(): \IntlTimeZone {}

function intltz_get_windows_id(string $timezoneId): string|false {}

function intltz_has_same_rules(\IntlTimeZone $timezone, \IntlTimeZone $other): bool {}

function intltz_to_date_time_zone(\IntlTimeZone $timezone): \DateTimeZone|false {}

function intltz_use_daylight_time(\IntlTimeZone $timezone): bool {}

/**
 * 获取变量的整数值
 */
function intval(mixed $value, int $base = 10): int {}

/**
 * 将 IPV4 的字符串互联网协议转换成长整型数字
 */
function ip2long(string $ip): int|false {}

/**
 * 嵌入二进制 IPTC 数据到 JPEG 图像中
 */
function iptcembed(string $iptc_data, string $filename, int $spool = 0): string|bool {}

/**
 * 将二进制 IPTC 块解析为单个标签
 */
function iptcparse(string $iptc_block): array|false {}

/**
 * 检查对象是否属于一个给定的类型或子类型。
 */
function is_a(mixed $object_or_class, string $class, bool $allow_string = false): bool {}

/**
 * 检测变量是否是数组
 */
function is_array(mixed $value): bool {}

/**
 * 检测变量是否是布尔值
 */
function is_bool(mixed $value): bool {}

/**
 * 验证值是否可以在当前范围内作为函数调用
 */
function is_callable(mixed $value, bool $syntax_only = false, &$callable_name = NULL): bool {}

/**
 * 验证变量内容是否为可数值
 */
function is_countable(mixed $value): bool {}

/**
 * 判断给定文件名是否是一个目录
 */
function is_dir(string $filename): bool {}

/**
 * 别名 is_float
 */
function is_double(mixed $value): bool {}

/**
 * 判断给定文件名是否可执行
 */
function is_executable(string $filename): bool {}

/**
 * 判断给定文件名是否为一个正常的文件
 */
function is_file(string $filename): bool {}

/**
 * 判断浮点数是否是有效的有限值
 */
function is_finite(float $num): bool {}

/**
 * 检测变量是否是浮点型
 */
function is_float(mixed $value): bool {}

/**
 * 判断浮点数是否为无限值
 */
function is_infinite(float $num): bool {}

/**
 * 检测变量是否是整数
 */
function is_int(mixed $value): bool {}

/**
 * 别名 is_int
 */
function is_integer(mixed $value): bool {}

/**
 * 验证变量的内容是否为可迭代值
 */
function is_iterable(mixed $value): bool {}

/**
 * 判断给定文件名是否为一个符号连接
 */
function is_link(string $filename): bool {}

/**
 * 别名 is_int
 */
function is_long(mixed $value): bool {}

/**
 * 判断浮点数是否是否为 NAN
 */
function is_nan(float $num): bool {}

/**
 * 检测变量是否是 null
 */
function is_null(mixed $value): bool {}

/**
 * 检测变量是否是数字或数字字符串
 */
function is_numeric(mixed $value): bool {}

/**
 * 检测变量是否是对象
 */
function is_object(mixed $value): bool {}

/**
 * 判断给定文件名是否可读
 */
function is_readable(string $filename): bool {}

/**
 * 查找变量是否为资源
 */
function is_resource(mixed $value): bool {}

/**
 * 查找变量是否是标量
 */
function is_scalar(mixed $value): bool {}

/**
 * Checks if a SOAP call has failed
 */
function is_soap_fault(mixed $object): bool {}

/**
 * 检测变量的类型是否是字符串
 */
function is_string(mixed $value): bool {}

/**
 * 检查对象是否继承或者实现（implement）此类
 */
function is_subclass_of(mixed $object_or_class, string $class, bool $allow_string = true): bool {}

/**
 * 判断文件是否是通过 HTTP POST 上传的
 */
function is_uploaded_file(string $filename): bool {}

/**
 * 判断给定的文件名是否可写
 */
function is_writable(string $filename): bool {}

/**
 * is_writable 的别名
 */
function is_writeable(string $filename): bool {}

/**
 * 为迭代器中每个元素调用函数
 */
function iterator_apply(\Traversable $iterator, callable $callback, ?array $args = NULL): int {}

/**
 * 计算迭代器中元素的个数
 */
function iterator_count(\Traversable|array $iterator): int {}

/**
 * 复制迭代器中的元素到数组
 */
function iterator_to_array(\Traversable|array $iterator, bool $preserve_keys = true): array {}

/**
 * 返回星期几
 */
function jddayofweek(int $julian_day, int $mode = CAL_DOW_DAYNO): string|int {}

/**
 * 返回月份名称
 */
function jdmonthname(int $julian_day, int $mode): string {}

/**
 * 从儒略日数转换为法国共和历
 */
function jdtofrench(int $julian_day): string {}

/**
 * 将儒略日数转换为公历日期
 */
function jdtogregorian(int $julian_day): string {}

/**
 * 将儒略日数转换为犹太历日期
 */
function jdtojewish(int $julian_day, bool $hebrew = false, int $flags = 0): string {}

/**
 * 将儒略日数转换为儒略历日期
 */
function jdtojulian(int $julian_day): string {}

/**
 * 将儒略日数转换为 Unix 时间戳
 */
function jdtounix(int $julian_day): int {}

/**
 * 将犹太历日期转换为儒略日数
 */
function jewishtojd(int $month, int $day, int $year): int {}

/**
 * 别名 implode
 */
function join(array|string $separator, ?array $array = NULL): string {}

/**
 * 对 JSON 格式的字符串进行解码
 */
function json_decode(string $json, ?bool $associative = NULL, int $depth = 512, int $flags = 0): mixed {}

/**
 * 对变量进行 JSON 编码
 */
function json_encode(mixed $value, int $flags = 0, int $depth = 512): string|false {}

/**
 * 返回最后发生的错误
 */
function json_last_error(): int {}

/**
 * 返回最后一次调用 json_validate()、json_encode() 或 json_decode() 时产生的错误信息
 */
function json_last_error_msg(): string {}

/**
 * 检查一个字符串是否包含有效的JSON (PHP 8 >= 8.3.0)
 */
function json_validate(string $json, int $depth = 512, int $flags = 0): bool {}

/**
 * 儒略日期转为儒略日数
 */
function juliantojd(int $month, int $day, int $year): int {}

/**
 * 从关联数组中取得键名
 */
function key(object|array $array): string|int|null {}

/**
 * 别名 array_key_exists
 */
function key_exists($key, array $array): bool {}

/**
 * 对数组按照键名逆向排序
 */
function krsort(array &$array, int $flags = SORT_REGULAR): true {}

/**
 * 对数组根据键名升序排序
 */
function ksort(array &$array, int $flags = SORT_REGULAR): true {}

/**
 * 使字符串的第一个字符小写
 */
function lcfirst(string $string): string {}

/**
 * 组合线性同余发生器
 */
function lcg_value(): float {}

/**
 * Add entries to LDAP directory
 */
function ldap_add(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {}

/**
 * Add entries to LDAP directory
 */
function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): \LDAP\Result|false {}

/**
 * 绑定 LDAP 目录
 */
function ldap_bind(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL): bool {}

/**
 * Bind to LDAP directory
 */
function ldap_bind_ext(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL, ?array $controls = NULL): \LDAP\Result|false {}

/**
 * 别名 ldap_unbind
 */
function ldap_close(\LDAP\Connection $ldap): bool {}

/**
 * Compare value of attribute found in entry specified with DN
 */
function ldap_compare(\LDAP\Connection $ldap, string $dn, string $attribute, string $value, ?array $controls = NULL): int|bool {}

/**
 * Connect to an LDAP server
 */
function ldap_connect(?string $uri = NULL, int $port = 389): \LDAP\Connection|false {}

/**
 * Count the number of entries in a search
 */
function ldap_count_entries(\LDAP\Connection $ldap, \LDAP\Result $result): int {}

/**
 * Counts the number of references in a search result
 */
function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int {}

/**
 * Delete an entry from a directory
 */
function ldap_delete(\LDAP\Connection $ldap, string $dn, ?array $controls = NULL): bool {}

/**
 * Delete an entry from a directory
 */
function ldap_delete_ext(\LDAP\Connection $ldap, string $dn, ?array $controls = NULL): \LDAP\Result|false {}

/**
 * Convert DN to User Friendly Naming format
 */
function ldap_dn2ufn(string $dn): string|false {}

/**
 * Convert LDAP error number into string error message
 */
function ldap_err2str(int $errno): string {}

/**
 * Return the LDAP error number of the last LDAP command
 */
function ldap_errno(\LDAP\Connection $ldap): int {}

/**
 * Return the LDAP error message of the last LDAP command
 */
function ldap_error(\LDAP\Connection $ldap): string {}

/**
 * Escape a string for use in an LDAP filter or DN
 */
function ldap_escape(string $value, string $ignore = "", int $flags = 0): string {}

/**
 * Performs an extended operation
 */
function ldap_exop(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = NULL, ?array $controls = NULL, &$response_data = null, &$response_oid = NULL): \LDAP\Result|bool {}

/**
 * PASSWD extended operation helper
 */
function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", string $old_password = "", string $new_password = "", &$controls = NULL): string|bool {}

/**
 * Refresh extended operation helper
 */
function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): int|false {}

/**
 * Performs an extended operation (PHP 8 >= 8.3.0)
 */
function ldap_exop_sync(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = NULL, ?array $controls = NULL, &$response_data = NULL, &$response_oid = NULL): \LDAP\Result|bool {}

/**
 * WHOAMI extended operation helper
 */
function ldap_exop_whoami(\LDAP\Connection $ldap): string|false {}

/**
 * Splits DN into its component parts
 */
function ldap_explode_dn(string $dn, int $with_attrib): array|false {}

/**
 * Return first attribute
 */
function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false {}

/**
 * Return first result id
 */
function ldap_first_entry(\LDAP\Connection $ldap, \LDAP\Result $result): \LDAP\ResultEntry|false {}

/**
 * Return first reference
 */
function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): \LDAP\ResultEntry|false {}

/**
 * Free result memory
 */
function ldap_free_result(\LDAP\Result $result): bool {}

/**
 * Get attributes from a search result entry
 */
function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array {}

/**
 * Get the DN of a result entry
 */
function ldap_get_dn(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false {}

/**
 * Get all result entries
 */
function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false {}

/**
 * Get the current value for given option
 */
function ldap_get_option(?\LDAP\Connection $ldap, int $option, &$value = NULL): bool {}

/**
 * Get all values from a result entry
 */
function ldap_get_values(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, string $attribute): array|false {}

/**
 * Get all binary values from a result entry
 */
function ldap_get_values_len(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, string $attribute): array|false {}

/**
 * Single-level search
 */
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = NULL): \LDAP\Result|array|false {}

/**
 * Add attribute values to current attributes
 */
function ldap_mod_add(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {}

function ldap_mod_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): \LDAP\Result|false {}

/**
 * Delete attribute values from current attributes
 */
function ldap_mod_del(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {}

function ldap_mod_del_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): \LDAP\Result|false {}

/**
 * Replace attribute values with new ones
 */
function ldap_mod_replace(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {}

function ldap_mod_replace_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): \LDAP\Result|false {}

/**
 * 别名 ldap_mod_replace
 */
function ldap_modify(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {}

/**
 * Batch and execute modifications on an LDAP entry
 */
function ldap_modify_batch(\LDAP\Connection $ldap, string $dn, array $modifications_info, ?array $controls = NULL): bool {}

/**
 * Get the next attribute in result
 */
function ldap_next_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false {}

/**
 * Get next result entry
 */
function ldap_next_entry(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): \LDAP\ResultEntry|false {}

/**
 * Get next reference
 */
function ldap_next_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): \LDAP\ResultEntry|false {}

/**
 * Parse result object from an LDAP extended operation
 */
function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, &$response_data = NULL, &$response_oid = NULL): bool {}

/**
 * Extract information from reference entry
 */
function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, &$referrals): bool {}

/**
 * Extract information from result
 */
function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, &$error_code, &$matched_dn = NULL, &$error_message = NULL, &$referrals = NULL, &$controls = NULL): bool {}

/**
 * Read an entry
 */
function ldap_read($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = NULL): \LDAP\Result|array|false {}

/**
 * Modify the name of an entry
 */
function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = NULL): bool {}

/**
 * Modify the name of an entry
 */
function ldap_rename_ext(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = NULL): \LDAP\Result|false {}

/**
 * Bind to LDAP directory using SASL
 */
function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL, ?string $mech = NULL, ?string $realm = NULL, ?string $authc_id = NULL, ?string $authz_id = NULL, ?string $props = NULL): bool {}

/**
 * Search LDAP tree
 */
function ldap_search($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = NULL): \LDAP\Result|array|false {}

/**
 * Set the value of the given option
 */
function ldap_set_option(?\LDAP\Connection $ldap, int $option, $value): bool {}

/**
 * Start TLS
 */
function ldap_start_tls(\LDAP\Connection $ldap): bool {}

/**
 * Unbind from LDAP directory
 */
function ldap_unbind(\LDAP\Connection $ldap): bool {}

/**
 * 计算两个字符串之间的 Levenshtein 距离
 */
function levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1): int {}

/**
 * Clear libxml error buffer
 */
function libxml_clear_errors(): void {}

/**
 * Disable the ability to load external entities
 */
function libxml_disable_entity_loader(bool $disable = true): bool {}

/**
 * Retrieve array of errors
 */
function libxml_get_errors(): array {}

/**
 * Get the current external entity loader (PHP 8 >= 8.2.0)
 */
function libxml_get_external_entity_loader(): ?callable {}

/**
 * Retrieve last error from libxml
 */
function libxml_get_last_error(): \LibXMLError|false {}

/**
 * Changes the default external entity loader
 */
function libxml_set_external_entity_loader(?callable $resolver_function): true {}

/**
 * Set the streams context for the next libxml document load or write
 */
function libxml_set_streams_context($context): void {}

/**
 * Disable libxml errors and allow user to fetch error information as needed
 */
function libxml_use_internal_errors(?bool $use_errors = NULL): bool {}

/**
 * 建立一个硬连接
 */
function link(string $target, string $link): bool {}

/**
 * 获取一个连接的信息
 */
function linkinfo(string $path): int|false {}

function locale_accept_from_http(string $header): string|false {}

function locale_add_likely_subtags(string $locale): string|false {}

function locale_canonicalize(string $locale): ?string {}

function locale_compose(array $subtags): string|false {}

function locale_filter_matches(string $languageTag, string $locale, bool $canonicalize = false): ?bool {}

function locale_get_all_variants(string $locale): ?array {}

function locale_get_default(): string {}

function locale_get_display_language(string $locale, ?string $displayLocale = NULL): string|false {}

function locale_get_display_name(string $locale, ?string $displayLocale = NULL): string|false {}

function locale_get_display_region(string $locale, ?string $displayLocale = NULL): string|false {}

function locale_get_display_script(string $locale, ?string $displayLocale = NULL): string|false {}

function locale_get_display_variant(string $locale, ?string $displayLocale = NULL): string|false {}

function locale_get_keywords(string $locale): array|false|null {}

function locale_get_primary_language(string $locale): ?string {}

function locale_get_region(string $locale): ?string {}

function locale_get_script(string $locale): ?string {}

function locale_is_right_to_left(string $locale): bool {}

function locale_lookup(array $languageTag, string $locale, bool $canonicalize = false, ?string $defaultLocale = NULL): ?string {}

function locale_minimize_subtags(string $locale): string|false {}

function locale_parse(string $locale): ?array {}

function locale_set_default(string $locale): true {}

/**
 * Get numeric formatting information
 */
function localeconv(): array {}

/**
 * 取得本地时间
 */
function localtime(?int $timestamp = NULL, bool $associative = false): array {}

/**
 * 自然对数
 */
function log(float $num, float $base = M_E): float {}

/**
 * 以 10 为底的对数
 */
function log10(float $num): float {}

/**
 * 返回 log(1 + number)，甚至当 number 的值接近零也能计算出准确结果
 */
function log1p(float $num): float {}

/**
 * 将长整型转化为字符串形式带点的互联网标准格式地址（IPV4）
 */
function long2ip(int $ip): string {}

/**
 * 给出一个文件或符号连接的信息
 */
function lstat(string $filename): array|false {}

/**
 * 删除字符串开头的空白字符（或其他字符）
 */
function ltrim(string $string, string $characters = " \n\r\t\v\x00"): string {}

/**
 * 发送邮件
 */
function mail(string $to, string $subject, string $message, array|string $additional_headers = [], string $additional_params = ""): bool {}

/**
 * 找出最大值
 */
function max(mixed $value, mixed ...$values): mixed {}

/**
 * 检查字符串在指定的编码里是否有效
 */
function mb_check_encoding(array|string|null $value = NULL, ?string $encoding = NULL): bool {}

/**
 * 按 Unicode 码位值返回字符
 */
function mb_chr(int $codepoint, ?string $encoding = NULL): string|false {}

/**
 * 对字符串进行大小写转换
 */
function mb_convert_case(string $string, int $mode, ?string $encoding = NULL): string {}

/**
 * 转换字符串，从一个字符编码到另一个字符编码
 */
function mb_convert_encoding(array|string $string, string $to_encoding, array|string|null $from_encoding = NULL): array|string|false {}

/**
 * Convert &quot;kana&quot; one from another (&quot;zen-kaku&quot;, &quot;han-kaku&quot; and more)
 */
function mb_convert_kana(string $string, string $mode = "KV", ?string $encoding = NULL): string {}

/**
 * 转换一个或多个变量的字符编码
 */
function mb_convert_variables(string $to_encoding, array|string $from_encoding, mixed &$var, mixed &...$vars): string|false {}

/**
 * 解码 MIME 头字段中的字符串
 */
function mb_decode_mimeheader(string $string): string {}

/**
 * 根据 HTML 数字字符串解码成字符
 */
function mb_decode_numericentity(string $string, array $map, ?string $encoding = NULL): string {}

/**
 * 检测字符的编码
 */
function mb_detect_encoding(string $string, array|string|null $encodings = NULL, bool $strict = false): string|false {}

/**
 * 设置/获取 字符编码的检测顺序
 */
function mb_detect_order(array|string|null $encoding = NULL): array|bool {}

/**
 * 为 MIME 头编码字符串
 */
function mb_encode_mimeheader(string $string, ?string $charset = NULL, ?string $transfer_encoding = NULL, string $newline = "\r\n", int $indent = 0): string {}

/**
 * Encode character to HTML numeric string reference
 */
function mb_encode_numericentity(string $string, array $map, ?string $encoding = NULL, bool $hex = false): string {}

/**
 * 获取已知编码类型的别名
 */
function mb_encoding_aliases(string $encoding): array {}

/**
 * Regular expression match with multibyte support
 */
function mb_ereg(string $pattern, string $string, &$matches = NULL): bool {}

/**
 * Regular expression match for multibyte string
 */
function mb_ereg_match(string $pattern, string $string, ?string $options = NULL): bool {}

/**
 * Replace regular expression with multibyte support
 */
function mb_ereg_replace(string $pattern, string $replacement, string $string, ?string $options = NULL): string|false|null {}

/**
 * Perform a regular expression search and replace with multibyte support using a callback
 */
function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, ?string $options = NULL): string|false|null {}

/**
 * Multibyte regular expression match for predefined multibyte string
 */
function mb_ereg_search(?string $pattern = NULL, ?string $options = NULL): bool {}

/**
 * Returns start point for next regular expression match
 */
function mb_ereg_search_getpos(): int {}

/**
 * Retrieve the result from the last multibyte regular expression match
 */
function mb_ereg_search_getregs(): array|false {}

/**
 * Setup string and regular expression for a multibyte regular expression match
 */
function mb_ereg_search_init(string $string, ?string $pattern = NULL, ?string $options = NULL): bool {}

/**
 * Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string
 */
function mb_ereg_search_pos(?string $pattern = NULL, ?string $options = NULL): array|false {}

/**
 * Returns the matched part of a multibyte regular expression
 */
function mb_ereg_search_regs(?string $pattern = NULL, ?string $options = NULL): array|false {}

/**
 * Set start point of next regular expression match
 */
function mb_ereg_search_setpos(int $offset): bool {}

/**
 * Regular expression match ignoring case with multibyte support
 */
function mb_eregi(string $pattern, string $string, &$matches = NULL): bool {}

/**
 * Replace regular expression with multibyte support ignoring case
 */
function mb_eregi_replace(string $pattern, string $replacement, string $string, ?string $options = NULL): string|false|null {}

/**
 * 获取 mbstring 的内部设置
 */
function mb_get_info(string $type = "all"): array|string|int|false|null {}

/**
 * 检测 HTTP 输入字符编码
 */
function mb_http_input(?string $type = NULL): array|string|false {}

/**
 * 设置/获取 HTTP 输出字符编码
 */
function mb_http_output(?string $encoding = NULL): string|bool {}

/**
 * 设置/获取内部字符编码
 */
function mb_internal_encoding(?string $encoding = NULL): string|bool {}

/**
 * 设置/获取当前的语言
 */
function mb_language(?string $language = NULL): string|bool {}

/**
 * Make a string's first character lowercase (PHP 8 >= 8.4.0)
 */
function mb_lcfirst(string $string, ?string $encoding = NULL): string {}

/**
 * 返回所有支持编码的数组
 */
function mb_list_encodings(): array {}

/**
 * Strip whitespace (or other characters) from the beginning of a string (PHP 8 >= 8.4.0)
 */
function mb_ltrim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string {}

/**
 * 获取字符的 Unicode 码位值
 */
function mb_ord(string $string, ?string $encoding = NULL): int|false {}

/**
 * 在输出缓冲中转换字符编码的回调函数
 */
function mb_output_handler(string $string, int $status): string {}

/**
 * 解析 GET/POST/COOKIE 数据并设置全局变量
 */
function mb_parse_str(string $string, &$result): bool {}

/**
 * 获取 MIME 字符串
 */
function mb_preferred_mime_name(string $encoding): string|false {}

/**
 * Set/Get character encoding for multibyte regex
 */
function mb_regex_encoding(?string $encoding = NULL): string|bool {}

/**
 * Set/Get the default options for mbregex functions
 */
function mb_regex_set_options(?string $options = NULL): string {}

/**
 * Strip whitespace (or other characters) from the end of a string (PHP 8 >= 8.4.0)
 */
function mb_rtrim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string {}

/**
 * Replace ill-formed byte sequences with the substitute character
 */
function mb_scrub(string $string, ?string $encoding = NULL): string {}

/**
 * 发送编码过的邮件
 */
function mb_send_mail(string $to, string $subject, string $message, array|string $additional_headers = [], ?string $additional_params = NULL): bool {}

/**
 * 使用正则表达式分割多字节字符串
 */
function mb_split(string $pattern, string $string, int $limit = -1): array|false {}

/**
 * Pad a multibyte string to a certain length with another multibyte string (PHP 8 >= PHP 8.3.0)
 */
function mb_str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT, ?string $encoding = NULL): string {}

/**
 * 指定多字节字符串，返回其字符数组
 */
function mb_str_split(string $string, int $length = 1, ?string $encoding = NULL): array {}

/**
 * 获取字符的一部分
 */
function mb_strcut(string $string, int $start, ?int $length = NULL, ?string $encoding = NULL): string {}

/**
 * 获取按指定宽度截断的字符串
 */
function mb_strimwidth(string $string, int $start, int $width, string $trim_marker = "", ?string $encoding = NULL): string {}

/**
 * 大小写不敏感地查找字符串在另一个字符串中首次出现的位置
 */
function mb_stripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): int|false {}

/**
 * 大小写不敏感地查找字符串在另一个字符串里的首次出现
 */
function mb_stristr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): string|false {}

/**
 * 获取字符串的长度
 */
function mb_strlen(string $string, ?string $encoding = NULL): int {}

/**
 * 查找字符串在另一个字符串中首次出现的位置
 */
function mb_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): int|false {}

/**
 * 查找指定字符在另一个字符串中最后一次的出现
 */
function mb_strrchr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): string|false {}

/**
 * 大小写不敏感地查找指定字符在另一个字符串中最后一次的出现
 */
function mb_strrichr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): string|false {}

/**
 * 大小写不敏感地在字符串中查找一个字符串最后出现的位置
 */
function mb_strripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): int|false {}

/**
 * 查找字符串在一个字符串中最后出现的位置
 */
function mb_strrpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): int|false {}

/**
 * 查找字符串在另一个字符串里的首次出现
 */
function mb_strstr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): string|false {}

/**
 * 使字符串小写
 */
function mb_strtolower(string $string, ?string $encoding = NULL): string {}

/**
 * 使字符串大写
 */
function mb_strtoupper(string $string, ?string $encoding = NULL): string {}

/**
 * 返回字符串的宽度
 */
function mb_strwidth(string $string, ?string $encoding = NULL): int {}

/**
 * 设置/获取替代字符
 */
function mb_substitute_character(string|int|null $substitute_character = NULL): string|int|bool {}

/**
 * 获取部分字符串
 */
function mb_substr(string $string, int $start, ?int $length = NULL, ?string $encoding = NULL): string {}

/**
 * 统计字符串出现的次数
 */
function mb_substr_count(string $haystack, string $needle, ?string $encoding = NULL): int {}

/**
 * Strip whitespace (or other characters) from the beginning and end of a string (PHP 8 >= 8.4.0)
 */
function mb_trim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string {}

/**
 * Make a string's first character uppercase (PHP 8 >= 8.4.0)
 */
function mb_ucfirst(string $string, ?string $encoding = NULL): string {}

/**
 * 计算字符串的 MD5 散列值
 */
function md5(string $string, bool $binary = false): string {}

/**
 * 计算指定文件的 MD5 散列值
 */
function md5_file(string $filename, bool $binary = false): string|false {}

/**
 * 返回分配给 PHP 内存的峰值
 */
function memory_get_peak_usage(bool $real_usage = false): int {}

/**
 * 返回分配给 PHP 的内存量
 */
function memory_get_usage(bool $real_usage = false): int {}

/**
 * Reset the peak memory usage (PHP 8 >= 8.2.0)
 */
function memory_reset_peak_usage(): void {}

/**
 * Calculate the metaphone key of a string
 */
function metaphone(string $string, int $max_phonemes = 0): string {}

/**
 * 检查类的方法是否存在
 */
function method_exists($object_or_class, string $method): bool {}

/**
 * Computes hash
 */
function mhash(int $algo, string $data, ?string $key = NULL): string|false {}

/**
 * Gets the highest available hash ID
 */
function mhash_count(): int {}

/**
 * Gets the block size of the specified hash
 */
function mhash_get_block_size(int $algo): int|false {}

/**
 * Gets the name of the specified hash
 */
function mhash_get_hash_name(int $algo): string|false {}

/**
 * Generates a key
 */
function mhash_keygen_s2k(int $algo, string $password, string $salt, int $length): string|false {}

/**
 * 返回当前 Unix 时间戳和微秒数
 */
function microtime(bool $as_float = false): string|float {}

/**
 * 检测文件的 MIME 类型
 */
function mime_content_type($filename): string|false {}

/**
 * 找出最小值
 */
function min(mixed $value, mixed ...$values): mixed {}

/**
 * 新建目录
 */
function mkdir(string $directory, int $permissions = 511, bool $recursive = false, $context = NULL): bool {}

/**
 * 取得一个日期的 Unix 时间戳
 */
function mktime(int $hour, ?int $minute = NULL, ?int $second = NULL, ?int $month = NULL, ?int $day = NULL, ?int $year = NULL): int|false {}

/**
 * 将上传的文件移动到新位置
 */
function move_uploaded_file(string $from, string $to): bool {}

function msgfmt_create(string $locale, string $pattern): ?\MessageFormatter {}

function msgfmt_format(\MessageFormatter $formatter, array $values): string|false {}

function msgfmt_format_message(string $locale, string $pattern, array $values): string|false {}

function msgfmt_get_error_code(\MessageFormatter $formatter): int {}

function msgfmt_get_error_message(\MessageFormatter $formatter): string {}

function msgfmt_get_locale(\MessageFormatter $formatter): string {}

function msgfmt_get_pattern(\MessageFormatter $formatter): string|false {}

function msgfmt_parse(\MessageFormatter $formatter, string $string): array|false {}

function msgfmt_parse_message(string $locale, string $pattern, string $message): array|false {}

function msgfmt_set_pattern(\MessageFormatter $formatter, string $pattern): bool {}

/**
 * 显示随机数的最大可能值
 */
function mt_getrandmax(): int {}

/**
 * 通过梅森旋转（Mersenne Twister）随机数生成器生成随机值
 */
function mt_rand(int $min = null, int $max = null): int {}

/**
 * 播下一个更好的随机数发生器种子
 */
function mt_srand(?int $seed = NULL, int $mode = MT_RAND_MT19937): void {}

function mysqli_affected_rows(\mysqli $mysql): string|int {}

function mysqli_autocommit(\mysqli $mysql, bool $enable): bool {}

function mysqli_begin_transaction(\mysqli $mysql, int $flags = 0, ?string $name = NULL): bool {}

function mysqli_change_user(\mysqli $mysql, string $username, string $password, ?string $database): bool {}

function mysqli_character_set_name(\mysqli $mysql): string {}

function mysqli_close(\mysqli $mysql): true {}

function mysqli_commit(\mysqli $mysql, int $flags = 0, ?string $name = NULL): bool {}

/**
 * 别名 mysqli::__construct
 */
function mysqli_connect(?string $hostname = NULL, ?string $username = NULL, ?string $password = NULL, ?string $database = NULL, ?int $port = NULL, ?string $socket = NULL): \mysqli|false {}

function mysqli_connect_errno(): int {}

function mysqli_connect_error(): ?string {}

function mysqli_data_seek(\mysqli_result $result, int $offset): bool {}

function mysqli_debug(string $options): true {}

function mysqli_dump_debug_info(\mysqli $mysql): bool {}

function mysqli_errno(\mysqli $mysql): int {}

function mysqli_error(\mysqli $mysql): string {}

function mysqli_error_list(\mysqli $mysql): array {}

/**
 * 别名 mysqli_real_escape_string
 */
function mysqli_escape_string(\mysqli $mysql, string $string): string {}

/**
 * 别名 mysqli_stmt_execute
 */
function mysqli_execute(\mysqli_stmt $statement, ?array $params = NULL): bool {}

function mysqli_execute_query(\mysqli $mysql, string $query, ?array $params = NULL): \mysqli_result|bool {}

function mysqli_fetch_all(\mysqli_result $result, int $mode = MYSQLI_NUM): array {}

function mysqli_fetch_array(\mysqli_result $result, int $mode = MYSQLI_BOTH): array|false|null {}

function mysqli_fetch_assoc(\mysqli_result $result): array|false|null {}

function mysqli_fetch_column(\mysqli_result $result, int $column = 0): string|int|float|false|null {}

function mysqli_fetch_field(\mysqli_result $result): object|false {}

function mysqli_fetch_field_direct(\mysqli_result $result, int $index): object|false {}

function mysqli_fetch_fields(\mysqli_result $result): array {}

function mysqli_fetch_lengths(\mysqli_result $result): array|false {}

function mysqli_fetch_object(\mysqli_result $result, string $class = "stdClass", array $constructor_args = []): object|false|null {}

function mysqli_fetch_row(\mysqli_result $result): array|false|null {}

function mysqli_field_count(\mysqli $mysql): int {}

function mysqli_field_seek(\mysqli_result $result, int $index): true {}

function mysqli_field_tell(\mysqli_result $result): int {}

function mysqli_free_result(\mysqli_result $result): void {}

function mysqli_get_charset(\mysqli $mysql): ?object {}

function mysqli_get_client_info(?\mysqli $mysql = NULL): string {}

/**
 * 返回客户端进程统计信息
 */
function mysqli_get_client_stats(): array {}

function mysqli_get_client_version(): int {}

function mysqli_get_connection_stats(\mysqli $mysql): array {}

function mysqli_get_host_info(\mysqli $mysql): string {}

/**
 * 返回打开和缓存的链接相关信息
 */
function mysqli_get_links_stats(): array {}

function mysqli_get_proto_info(\mysqli $mysql): int {}

function mysqli_get_server_info(\mysqli $mysql): string {}

function mysqli_get_server_version(\mysqli $mysql): int {}

function mysqli_get_warnings(\mysqli $mysql): \mysqli_warning|false {}

function mysqli_info(\mysqli $mysql): ?string {}

function mysqli_init(): \mysqli|false {}

function mysqli_insert_id(\mysqli $mysql): string|int {}

function mysqli_kill(\mysqli $mysql, int $process_id): bool {}

function mysqli_more_results(\mysqli $mysql): bool {}

function mysqli_multi_query(\mysqli $mysql, string $query): bool {}

function mysqli_next_result(\mysqli $mysql): bool {}

function mysqli_num_fields(\mysqli_result $result): int {}

function mysqli_num_rows(\mysqli_result $result): string|int {}

function mysqli_options(\mysqli $mysql, int $option, $value): bool {}

function mysqli_ping(\mysqli $mysql): bool {}

function mysqli_poll(?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0): int|false {}

function mysqli_prepare(\mysqli $mysql, string $query): \mysqli_stmt|false {}

function mysqli_query(\mysqli $mysql, string $query, int $result_mode = MYSQLI_STORE_RESULT): \mysqli_result|bool {}

function mysqli_real_connect(\mysqli $mysql, ?string $hostname = NULL, ?string $username = NULL, ?string $password = NULL, ?string $database = NULL, ?int $port = NULL, ?string $socket = NULL, int $flags = 0): bool {}

function mysqli_real_escape_string(\mysqli $mysql, string $string): string {}

function mysqli_real_query(\mysqli $mysql, string $query): bool {}

function mysqli_reap_async_query(\mysqli $mysql): \mysqli_result|bool {}

function mysqli_refresh(\mysqli $mysql, int $flags): bool {}

function mysqli_release_savepoint(\mysqli $mysql, string $name): bool {}

/**
 * 别名 mysqli_driver-&gt;report_mode
 */
function mysqli_report(int $flags): true {}

function mysqli_rollback(\mysqli $mysql, int $flags = 0, ?string $name = NULL): bool {}

function mysqli_savepoint(\mysqli $mysql, string $name): bool {}

function mysqli_select_db(\mysqli $mysql, string $database): bool {}

function mysqli_set_charset(\mysqli $mysql, string $charset): bool {}

/**
 * 别名 mysqli_options
 */
function mysqli_set_opt(\mysqli $mysql, int $option, $value): bool {}

function mysqli_sqlstate(\mysqli $mysql): string {}

function mysqli_ssl_set(\mysqli $mysql, ?string $key, ?string $certificate, ?string $ca_certificate, ?string $ca_path, ?string $cipher_algos): true {}

function mysqli_stat(\mysqli $mysql): string|false {}

function mysqli_stmt_affected_rows(\mysqli_stmt $statement): string|int {}

function mysqli_stmt_attr_get(\mysqli_stmt $statement, int $attribute): int {}

function mysqli_stmt_attr_set(\mysqli_stmt $statement, int $attribute, int $value): bool {}

function mysqli_stmt_bind_param(\mysqli_stmt $statement, string $types, mixed &...$vars): bool {}

function mysqli_stmt_bind_result(\mysqli_stmt $statement, mixed &...$vars): bool {}

function mysqli_stmt_close(\mysqli_stmt $statement): true {}

function mysqli_stmt_data_seek(\mysqli_stmt $statement, int $offset): void {}

function mysqli_stmt_errno(\mysqli_stmt $statement): int {}

function mysqli_stmt_error(\mysqli_stmt $statement): string {}

function mysqli_stmt_error_list(\mysqli_stmt $statement): array {}

function mysqli_stmt_execute(\mysqli_stmt $statement, ?array $params = NULL): bool {}

function mysqli_stmt_fetch(\mysqli_stmt $statement): ?bool {}

function mysqli_stmt_field_count(\mysqli_stmt $statement): int {}

function mysqli_stmt_free_result(\mysqli_stmt $statement): void {}

function mysqli_stmt_get_result(\mysqli_stmt $statement): \mysqli_result|false {}

function mysqli_stmt_get_warnings(\mysqli_stmt $statement): \mysqli_warning|false {}

function mysqli_stmt_init(\mysqli $mysql): \mysqli_stmt|false {}

function mysqli_stmt_insert_id(\mysqli_stmt $statement): string|int {}

function mysqli_stmt_more_results(\mysqli_stmt $statement): bool {}

function mysqli_stmt_next_result(\mysqli_stmt $statement): bool {}

function mysqli_stmt_num_rows(\mysqli_stmt $statement): string|int {}

function mysqli_stmt_param_count(\mysqli_stmt $statement): int {}

function mysqli_stmt_prepare(\mysqli_stmt $statement, string $query): bool {}

function mysqli_stmt_reset(\mysqli_stmt $statement): bool {}

function mysqli_stmt_result_metadata(\mysqli_stmt $statement): \mysqli_result|false {}

function mysqli_stmt_send_long_data(\mysqli_stmt $statement, int $param_num, string $data): bool {}

function mysqli_stmt_sqlstate(\mysqli_stmt $statement): string {}

function mysqli_stmt_store_result(\mysqli_stmt $statement): bool {}

function mysqli_store_result(\mysqli $mysql, int $mode = 0): \mysqli_result|false {}

function mysqli_thread_id(\mysqli $mysql): int {}

function mysqli_thread_safe(): bool {}

function mysqli_use_result(\mysqli $mysql): \mysqli_result|false {}

function mysqli_warning_count(\mysqli $mysql): int {}

/**
 * 用&ldquo;自然排序&rdquo;算法对数组进行不区分大小写字母的排序
 */
function natcasesort(array &$array): true {}

/**
 * 用&ldquo;自然排序&rdquo;算法对数组排序
 */
function natsort(array &$array): true {}

/**
 * 获取网络接口
 */
function net_get_interfaces(): array|false {}

/**
 * 将数组中的内部指针向前移动一位
 */
function next(object|array &$array): mixed {}

/**
 * Plural version of gettext
 */
function ngettext(string $singular, string $plural, int $count): string {}

/**
 * 在字符串所有新行之前插入 HTML 换行标记
 */
function nl2br(string $string, bool $use_xhtml = true): string {}

function normalizer_get_raw_decomposition(string $string, int $form = Normalizer::FORM_C): ?string {}

function normalizer_is_normalized(string $string, int $form = Normalizer::FORM_C): bool {}

function normalizer_normalize(string $string, int $form = Normalizer::FORM_C): string|false {}

/**
 * 以千位分隔符方式格式化一个数字
 */
function number_format(float $num, int $decimals = 0, ?string $decimal_separator = ".", ?string $thousands_separator = ","): string {}

function numfmt_create(string $locale, int $style, ?string $pattern = NULL): ?\NumberFormatter {}

function numfmt_format(\NumberFormatter $formatter, int|float $num, int $type = NumberFormatter::TYPE_DEFAULT): string|false {}

function numfmt_format_currency(\NumberFormatter $formatter, float $amount, string $currency): string|false {}

function numfmt_get_attribute(\NumberFormatter $formatter, int $attribute): int|float|false {}

function numfmt_get_error_code(\NumberFormatter $formatter): int {}

function numfmt_get_error_message(\NumberFormatter $formatter): string {}

function numfmt_get_locale(\NumberFormatter $formatter, int $type = ULOC_ACTUAL_LOCALE): string|false {}

function numfmt_get_pattern(\NumberFormatter $formatter): string|false {}

function numfmt_get_symbol(\NumberFormatter $formatter, int $symbol): string|false {}

function numfmt_get_text_attribute(\NumberFormatter $formatter, int $attribute): string|false {}

function numfmt_parse(\NumberFormatter $formatter, string $string, int $type = NumberFormatter::TYPE_DOUBLE, &$offset = NULL): int|float|false {}

function numfmt_parse_currency(\NumberFormatter $formatter, string $string, &$currency, &$offset = NULL): float|false {}

function numfmt_set_attribute(\NumberFormatter $formatter, int $attribute, int|float $value): bool {}

function numfmt_set_pattern(\NumberFormatter $formatter, string $pattern): bool {}

function numfmt_set_symbol(\NumberFormatter $formatter, int $symbol, string $value): bool {}

function numfmt_set_text_attribute(\NumberFormatter $formatter, int $attribute, string $value): bool {}

/**
 * 清空（擦掉）活动输出缓冲区的内容
 */
function ob_clean(): bool {}

/**
 * 清空（擦除）活动缓冲区的内容并关闭它
 */
function ob_end_clean(): bool {}

/**
 * 冲刷（发送）活动输出处理程序的返回值，并关闭活动输出缓冲区
 */
function ob_end_flush(): bool {}

/**
 * 冲刷（发送）活动输出处理程序的返回值
 */
function ob_flush(): bool {}

/**
 * 获取活动缓冲区的内容并将其关闭
 */
function ob_get_clean(): string|false {}

/**
 * 返回输出缓冲区的内容
 */
function ob_get_contents(): string|false {}

/**
 * 冲刷（发送）活动输出处理程序的返回值，返回活动输出缓冲区的内容并将其关闭
 */
function ob_get_flush(): string|false {}

/**
 * 返回输出缓冲区内容的长度
 */
function ob_get_length(): int|false {}

/**
 * 返回输出缓冲机制的嵌套级别
 */
function ob_get_level(): int {}

/**
 * 得到所有输出缓冲区的状态
 */
function ob_get_status(bool $full_status = false): array {}

/**
 * ob_start 回调函数压缩输出缓冲区
 */
function ob_gzhandler(string $data, int $flags): string|false {}

/**
 * 打开/关闭绝对刷送
 */
function ob_implicit_flush(bool $enable = true): void {}

/**
 * 列出所有使用的输出处理程序
 */
function ob_list_handlers(): array {}

/**
 * 打开输出控制缓冲
 */
function ob_start($callback = NULL, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS): bool {}

/**
 * 八进制转换为十进制
 */
function octdec(string $octal_string): int|float {}

/**
 * Toggle autocommit behaviour
 */
function odbc_autocommit(\Odbc\Connection $odbc, ?bool $enable = NULL): int|bool {}

/**
 * Handling of binary column data
 */
function odbc_binmode(\Odbc\Result $statement, int $mode): true {}

/**
 * Close an ODBC connection
 */
function odbc_close(\Odbc\Connection $odbc): void {}

/**
 * Close all ODBC connections
 */
function odbc_close_all(): void {}

/**
 * Lists columns and associated privileges for the given table
 */
function odbc_columnprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, string $column): \Odbc\Result|false {}

/**
 * Lists the column names in specified tables
 */
function odbc_columns(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $table = NULL, ?string $column = NULL): \Odbc\Result|false {}

/**
 * Commit an ODBC transaction
 */
function odbc_commit(\Odbc\Connection $odbc): bool {}

/**
 * Connect to a datasource
 */
function odbc_connect(string $dsn, ?string $user = NULL, ?string $password = NULL, int $cursor_option = SQL_CUR_USE_DRIVER): \Odbc\Connection|false {}

/**
 * Determines if an ODBC connection string value is quoted (PHP 8 >= 8.2.0)
 */
function odbc_connection_string_is_quoted(string $str): bool {}

/**
 * Quotes an ODBC connection string value (PHP 8 >= 8.2.0)
 */
function odbc_connection_string_quote(string $str): string {}

/**
 * Determines if an ODBC connection string value should be quoted (PHP 8 >= 8.2.0)
 */
function odbc_connection_string_should_quote(string $str): bool {}

/**
 * Get cursorname
 */
function odbc_cursor(\Odbc\Result $statement): string|false {}

/**
 * Returns information about available DSNs
 */
function odbc_data_source(\Odbc\Connection $odbc, int $fetch_type): array|false|null {}

/**
 * 别名 odbc_exec
 */
function odbc_do(\Odbc\Connection $odbc, string $query): \Odbc\Result|false {}

/**
 * Get the last error code
 */
function odbc_error(?\Odbc\Connection $odbc = NULL): string {}

/**
 * Get the last error message
 */
function odbc_errormsg(?\Odbc\Connection $odbc = NULL): string {}

/**
 * Directly execute an SQL statement
 */
function odbc_exec(\Odbc\Connection $odbc, string $query): \Odbc\Result|false {}

/**
 * Execute a prepared statement
 */
function odbc_execute(\Odbc\Result $statement, array $params = []): bool {}

/**
 * Fetch a result row as an associative array
 */
function odbc_fetch_array(\Odbc\Result $statement, ?int $row = NULL): array|false {}

/**
 * Fetch one result row into array
 */
function odbc_fetch_into(\Odbc\Result $statement, &$array, ?int $row = NULL): int|false {}

/**
 * Fetch a result row as an object
 */
function odbc_fetch_object(\Odbc\Result $statement, ?int $row = NULL): \stdClass|false {}

/**
 * Fetch a row
 */
function odbc_fetch_row(\Odbc\Result $statement, ?int $row = NULL): bool {}

/**
 * Get the length (precision) of a field
 */
function odbc_field_len(\Odbc\Result $statement, int $field): int|false {}

/**
 * Get the columnname
 */
function odbc_field_name(\Odbc\Result $statement, int $field): string|false {}

/**
 * Return column number
 */
function odbc_field_num(\Odbc\Result $statement, string $field): int|false {}

/**
 * 别名 odbc_field_len
 */
function odbc_field_precision(\Odbc\Result $statement, int $field): int|false {}

/**
 * Get the scale of a field
 */
function odbc_field_scale(\Odbc\Result $statement, int $field): int|false {}

/**
 * Datatype of a field
 */
function odbc_field_type(\Odbc\Result $statement, int $field): string|false {}

/**
 * Retrieves a list of foreign keys
 */
function odbc_foreignkeys(\Odbc\Connection $odbc, ?string $pk_catalog, string $pk_schema, string $pk_table, string $fk_catalog, string $fk_schema, string $fk_table): \Odbc\Result|false {}

/**
 * Free objects associated with a result
 */
function odbc_free_result(\Odbc\Result $statement): true {}

/**
 * Retrieves information about data types supported by the data source
 */
function odbc_gettypeinfo(\Odbc\Connection $odbc, int $data_type = 0): \Odbc\Result|false {}

/**
 * Handling of LONG columns
 */
function odbc_longreadlen(\Odbc\Result $statement, int $length): true {}

/**
 * Checks if multiple results are available
 */
function odbc_next_result(\Odbc\Result $statement): bool {}

/**
 * Number of columns in a result
 */
function odbc_num_fields(\Odbc\Result $statement): int {}

/**
 * Number of rows in a result
 */
function odbc_num_rows(\Odbc\Result $statement): int {}

/**
 * Open a persistent database connection
 */
function odbc_pconnect(string $dsn, ?string $user = NULL, ?string $password = NULL, int $cursor_option = SQL_CUR_USE_DRIVER): \Odbc\Connection|false {}

/**
 * Prepares a statement for execution
 */
function odbc_prepare(\Odbc\Connection $odbc, string $query): \Odbc\Result|false {}

/**
 * Gets the primary keys for a table
 */
function odbc_primarykeys(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table): \Odbc\Result|false {}

/**
 * Retrieve information about parameters to procedures
 */
function odbc_procedurecolumns(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $procedure = NULL, ?string $column = NULL): \Odbc\Result|false {}

/**
 * Get the list of procedures stored in a specific data source
 */
function odbc_procedures(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $procedure = NULL): \Odbc\Result|false {}

/**
 * Get result data
 */
function odbc_result(\Odbc\Result $statement, string|int $field): string|bool|null {}

/**
 * Print result as HTML table
 */
function odbc_result_all(\Odbc\Result $statement, string $format = ""): int|false {}

/**
 * Rollback a transaction
 */
function odbc_rollback(\Odbc\Connection $odbc): bool {}

/**
 * Adjust ODBC settings
 */
function odbc_setoption(\Odbc\Connection|\Odbc\Result $odbc, int $which, int $option, int $value): bool {}

/**
 * Retrieves special columns
 */
function odbc_specialcolumns(\Odbc\Connection $odbc, int $type, ?string $catalog, string $schema, string $table, int $scope, int $nullable): \Odbc\Result|false {}

/**
 * Retrieve statistics about a table
 */
function odbc_statistics(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, int $unique, int $accuracy): \Odbc\Result|false {}

/**
 * Lists tables and the privileges associated with each table
 */
function odbc_tableprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table): \Odbc\Result|false {}

/**
 * Get the list of table names stored in a specific data source
 */
function odbc_tables(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $table = NULL, ?string $types = NULL): \Odbc\Result|false {}

/**
 * 无需运行，即可编译并缓存 PHP 脚本
 */
function opcache_compile_file(string $filename): bool {}

/**
 * 获取缓存的配置信息
 */
function opcache_get_configuration(): array|false {}

/**
 * 获取缓存的状态信息
 */
function opcache_get_status(bool $include_scripts = true): array|false {}

/**
 * 废除脚本缓存
 */
function opcache_invalidate(string $filename, bool $force = false): bool {}

/**
 * 用于判断脚本是否已缓存在 OPCache 中
 */
function opcache_is_script_cached(string $filename): bool {}

/**
 * 用于判断脚本是否已缓存在 OPCache 文件缓存中 (PHP 8 >= 8.5.0)
 */
function opcache_is_script_cached_in_file_cache(string $filename): bool {}

/**
 * 将某个函数加入黑名单，使其不参与 JIT 编译 (PHP 8 >= 8.4.0)
 */
function opcache_jit_blacklist(\Closure $closure): void {}

/**
 * 重置字节码缓存的内容
 */
function opcache_reset(): bool {}

/**
 * 打开目录句柄
 */
function opendir(string $directory, $context = NULL) {}

/**
 * Open connection to system logger
 */
function openlog(string $prefix, int $flags, int $facility): true {}

/**
 * 获取密码iv长度
 */
function openssl_cipher_iv_length(string $cipher_algo): int|false {}

/**
 * Gets the cipher key length (PHP 8 >= 8.2.0)
 */
function openssl_cipher_key_length(string $cipher_algo): int|false {}

/**
 * Decrypt a CMS message
 */
function openssl_cms_decrypt(string $input_filename, string $output_filename, $certificate, $private_key = NULL, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

/**
 * Encrypt a CMS message
 */
function openssl_cms_encrypt(string $input_filename, string $output_filename, $certificate, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, string|int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC): bool {}

/**
 * Export the CMS file to an array of PEM certificates
 */
function openssl_cms_read(string $input_filename, &$certificates): bool {}

/**
 * Sign a file
 */
function openssl_cms_sign(string $input_filename, string $output_filename, \OpenSSLCertificate|string $certificate, $private_key, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, ?string $untrusted_certificates_filename = NULL): bool {}

/**
 * Verify a CMS signature
 */
function openssl_cms_verify(string $input_filename, int $flags = 0, ?string $certificates = NULL, array $ca_info = [], ?string $untrusted_certificates_filename = NULL, ?string $content = NULL, ?string $pk7 = NULL, ?string $sigfile = NULL, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

/**
 * 将 CSR 作为字符串导出
 */
function openssl_csr_export(\OpenSSLCertificateSigningRequest|string $csr, &$output, bool $no_text = true): bool {}

/**
 * 将 CSR 导出到文件
 */
function openssl_csr_export_to_file(\OpenSSLCertificateSigningRequest|string $csr, string $output_filename, bool $no_text = true): bool {}

/**
 * 返回 CSR 的公钥
 */
function openssl_csr_get_public_key(\OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): \OpenSSLAsymmetricKey|false {}

/**
 * 返回 CSR 的主题
 */
function openssl_csr_get_subject(\OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): array|false {}

/**
 * 生成一个 CSR
 */
function openssl_csr_new(array $distinguished_names, &$private_key, ?array $options = NULL, ?array $extra_attributes = NULL): \OpenSSLCertificateSigningRequest|bool {}

/**
 * 用另一个证书签署 CSR（或者本身）并且生成一个证书
 */
function openssl_csr_sign(\OpenSSLCertificateSigningRequest|string $csr, \OpenSSLCertificate|string|null $ca_certificate, $private_key, int $days, ?array $options = NULL, int $serial = 0, ?string $serial_hex = NULL): \OpenSSLCertificate|false {}

/**
 * 解密数据
 */
function openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", ?string $tag = NULL, string $aad = ""): string|false {}

/**
 * 计算远程 DH 公钥和本地 DH 密钥的共享密钥
 */
function openssl_dh_compute_key(string $public_key, \OpenSSLAsymmetricKey $private_key): string|false {}

/**
 * 计算摘要
 */
function openssl_digest(string $data, string $digest_algo, bool $binary = false): string|false {}

/**
 * 加密数据
 */
function openssl_encrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", &$tag = NULL, string $aad = "", int $tag_length = 16): string|false {}

/**
 * 返回 openSSL 错误消息
 */
function openssl_error_string(): string|false {}

/**
 * 释放密钥资源
 */
function openssl_free_key(\OpenSSLAsymmetricKey $key): void {}

/**
 * 检索可用的证书位置
 */
function openssl_get_cert_locations(): array {}

/**
 * 获取可用的加密算法
 */
function openssl_get_cipher_methods(bool $aliases = false): array {}

/**
 * 获得ECC的可用曲线名称列表
 */
function openssl_get_curve_names(): array|false {}

/**
 * 获取可用的摘要算法
 */
function openssl_get_md_methods(bool $aliases = false): array {}

/**
 * 别名 openssl_pkey_get_private
 */
function openssl_get_privatekey($private_key, ?string $passphrase = NULL): \OpenSSLAsymmetricKey|false {}

/**
 * 别名 openssl_pkey_get_public
 */
function openssl_get_publickey($public_key): \OpenSSLAsymmetricKey|false {}

/**
 * 打开密封的数据
 */
function openssl_open(string $data, &$output, string $encrypted_key, $private_key, string $cipher_algo, ?string $iv = NULL): bool {}

/**
 * 生成 PKCS5 v2 PBKDF2 字符串
 */
function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algo = "sha1"): string|false {}

/**
 * 将 PKCS#12 兼容证书存储文件导出到变量
 */
function openssl_pkcs12_export(\OpenSSLCertificate|string $certificate, &$output, $private_key, string $passphrase, array $options = []): bool {}

/**
 * 输出一个 PKCS#12 兼容的证书存储文件
 */
function openssl_pkcs12_export_to_file(\OpenSSLCertificate|string $certificate, string $output_filename, $private_key, string $passphrase, array $options = []): bool {}

/**
 * 将 PKCS#12 证书存储区解析到数组中
 */
function openssl_pkcs12_read(string $pkcs12, &$certificates, string $passphrase): bool {}

/**
 * 解密一个 S/MIME 加密的消息
 */
function openssl_pkcs7_decrypt(string $input_filename, string $output_filename, $certificate, $private_key = NULL): bool {}

/**
 * 加密一个 S/MIME 消息
 */
function openssl_pkcs7_encrypt(string $input_filename, string $output_filename, $certificate, ?array $headers, int $flags = 0, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC): bool {}

/**
 * 将 PKCS7 文件导出为 PEM 格式证书的数组
 */
function openssl_pkcs7_read(string $data, &$certificates): bool {}

/**
 * 对一个 S/MIME 消息进行签名
 */
function openssl_pkcs7_sign(string $input_filename, string $output_filename, \OpenSSLCertificate|string $certificate, $private_key, ?array $headers, int $flags = PKCS7_DETACHED, ?string $untrusted_certificates_filename = NULL): bool {}

/**
 * 校验一个已签名的 S/MIME 消息的签名
 */
function openssl_pkcs7_verify(string $input_filename, int $flags, ?string $signers_certificates_filename = NULL, array $ca_info = [], ?string $untrusted_certificates_filename = NULL, ?string $content = NULL, ?string $output_filename = NULL): int|bool {}

/**
 * Computes shared secret for public value of remote and local DH or ECDH key
 */
function openssl_pkey_derive($public_key, $private_key, int $key_length = 0): string|false {}

/**
 * 将一个密钥的可输出表示转换为字符串
 */
function openssl_pkey_export($key, &$output, ?string $passphrase = NULL, ?array $options = NULL): bool {}

/**
 * 将密钥导出到文件中
 */
function openssl_pkey_export_to_file($key, string $output_filename, ?string $passphrase = NULL, ?array $options = NULL): bool {}

/**
 * 释放一个私钥
 */
function openssl_pkey_free(\OpenSSLAsymmetricKey $key): void {}

/**
 * 返回包含密钥详情的数组
 */
function openssl_pkey_get_details(\OpenSSLAsymmetricKey $key): array|false {}

/**
 * 获取私钥
 */
function openssl_pkey_get_private($private_key, ?string $passphrase = NULL): \OpenSSLAsymmetricKey|false {}

/**
 * 从证书中解析公钥，以供使用
 */
function openssl_pkey_get_public($public_key): \OpenSSLAsymmetricKey|false {}

/**
 * 生成新的私钥
 */
function openssl_pkey_new(?array $options = NULL): \OpenSSLAsymmetricKey|false {}

/**
 * 使用私钥解密数据
 */
function openssl_private_decrypt(string $data, &$decrypted_data, $private_key, int $padding = OPENSSL_PKCS1_PADDING, ?string $digest_algo = NULL): bool {}

/**
 * 使用私钥加密数据
 */
function openssl_private_encrypt(string $data, &$encrypted_data, $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * 使用公钥解密数据
 */
function openssl_public_decrypt(string $data, &$decrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * 使用公钥加密数据
 */
function openssl_public_encrypt(string $data, &$encrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING, ?string $digest_algo = NULL): bool {}

/**
 * 生成一个伪随机字节串
 */
function openssl_random_pseudo_bytes(int $length, &$strong_result = NULL): string {}

/**
 * 密封 (加密) 数据
 */
function openssl_seal(string $data, &$sealed_data, &$encrypted_keys, array $public_key, string $cipher_algo, &$iv = NULL): int|false {}

/**
 * 生成签名
 */
function openssl_sign(string $data, &$signature, $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1, int $padding = 0): bool {}

/**
 * 通过签名公钥和 challenge 导出一个可用的 PEM 格式的公钥
 */
function openssl_spki_export(string $spki): string|false {}

/**
 * 导出与签名公钥和 challenge 相关的 challenge
 */
function openssl_spki_export_challenge(string $spki): string|false {}

/**
 * 生成新的签名公钥和 challenge
 */
function openssl_spki_new(\OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = OPENSSL_ALGO_MD5): string|false {}

/**
 * 验证签名公钥和 challenge
 */
function openssl_spki_verify(string $spki): bool {}

/**
 * 验证签名
 */
function openssl_verify(string $data, string $signature, $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1, int $padding = 0): int|false {}

/**
 * 检查私钥是否对应于证书
 */
function openssl_x509_check_private_key(\OpenSSLCertificate|string $certificate, $private_key): bool {}

/**
 * 验证是否可以为特定目的使用证书
 */
function openssl_x509_checkpurpose(\OpenSSLCertificate|string $certificate, int $purpose, array $ca_info = [], ?string $untrusted_certificates_file = NULL): int|bool {}

/**
 * 以字符串格式导出证书
 */
function openssl_x509_export(\OpenSSLCertificate|string $certificate, &$output, bool $no_text = true): bool {}

/**
 * 导出证书至文件
 */
function openssl_x509_export_to_file(\OpenSSLCertificate|string $certificate, string $output_filename, bool $no_text = true): bool {}

/**
 * 计算一个给定的 x.509 证书的指纹或摘要
 */
function openssl_x509_fingerprint(\OpenSSLCertificate|string $certificate, string $digest_algo = "sha1", bool $binary = false): string|false {}

/**
 * 释放证书资源
 */
function openssl_x509_free(\OpenSSLCertificate $certificate): void {}

/**
 * 解析 X509 证书并作为一个数组返回信息
 */
function openssl_x509_parse(\OpenSSLCertificate|string $certificate, bool $short_names = true): array|false {}

/**
 * 解析 x.509 证书并返回对象
 */
function openssl_x509_read(\OpenSSLCertificate|string $certificate): \OpenSSLCertificate|false {}

/**
 * Verifies digital signature of x509 certificate against a public key
 */
function openssl_x509_verify(\OpenSSLCertificate|string $certificate, $public_key): int {}

/**
 * 转换字符串第一个字节为 0-255 之间的值
 */
function ord(string $character): int {}

/**
 * 添加 URL 重写器的值
 */
function output_add_rewrite_var(string $name, string $value): bool {}

/**
 * 重设 URL 重写器的值
 */
function output_reset_rewrite_vars(): bool {}

/**
 * 将数据打包成二进制字符串
 */
function pack(string $format, mixed ...$values): string {}

/**
 * 解析一个配置文件
 */
function parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false {}

/**
 * 解析配置字符串
 */
function parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false {}

/**
 * 解析 URL 查询字符串
 */
function parse_str(string $string, &$result): void {}

/**
 * 解析 URL，返回其组成部分
 */
function parse_url(string $url, int $component = -1): array|string|int|false|null {}

/**
 * 执行外部程序并且显示原始输出
 */
function passthru(string $command, &$result_code = NULL): ?false {}

/**
 * Get available password hashing algorithm IDs
 */
function password_algos(): array {}

/**
 * 返回指定散列（hash）的相关信息
 */
function password_get_info(string $hash): array {}

/**
 * 创建密码的散列（hash）
 */
function password_hash(string $password, string|int|null $algo, array $options = []): string {}

/**
 * 检测散列值是否匹配指定的选项
 */
function password_needs_rehash(string $hash, string|int|null $algo, array $options = []): bool {}

/**
 * 验证密码是否和散列值匹配
 */
function password_verify(string $password, string $hash): bool {}

/**
 * 返回文件路径的信息
 */
function pathinfo(string $path, int $flags = PATHINFO_ALL): array|string {}

/**
 * 关闭进程文件指针
 */
function pclose($handle): int {}

function pdo_drivers(): array {}

/**
 * 打开持久的 Internet 或 Unix 套接字连接
 */
function pfsockopen(string $hostname, int $port = -1, &$error_code = NULL, &$error_message = NULL, ?float $timeout = NULL) {}

/**
 * 返回受影响的记录数（元组）
 */
function pg_affected_rows(\PgSql\Result $result): int {}

/**
 * 取消异步查询
 */
function pg_cancel_query(\PgSql\Connection $connection): bool {}

/**
 * Change a PostgreSQL user's password (PHP 8 >= 8.4.0)
 */
function pg_change_password(\PgSql\Connection $connection, string $user, string $password): bool {}

/**
 * 获取客户端编码
 */
function pg_client_encoding(?\PgSql\Connection $connection = NULL): string {}

function pg_clientencoding(?\PgSql\Connection $connection = NULL): string {}

/**
 * 关闭 PostgreSQL 连接
 */
function pg_close(?\PgSql\Connection $connection = NULL): true {}

function pg_cmdtuples(\PgSql\Result $result): int {}

/**
 * 打开 PostgreSQL 连接
 */
function pg_connect(string $connection_string, int $flags = 0): \PgSql\Connection|false {}

/**
 * 对正在进行尝试进行异步的 PostgreSQL 连接轮询其状态。
 */
function pg_connect_poll(\PgSql\Connection $connection): int {}

/**
 * 获取连接是否繁忙
 */
function pg_connection_busy(\PgSql\Connection $connection): bool {}

/**
 * 重置连接（再次连接）
 */
function pg_connection_reset(\PgSql\Connection $connection): bool {}

/**
 * 获取连接状态
 */
function pg_connection_status(\PgSql\Connection $connection): int {}

/**
 * Reads input on the connection
 */
function pg_consume_input(\PgSql\Connection $connection): bool {}

/**
 * 将关联的数组值转换为适合 SQL 语句的格式
 */
function pg_convert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = 0): array|false {}

/**
 * 将数组中的记录插入到表
 */
function pg_copy_from(\PgSql\Connection $connection, string $table_name, \Traversable|array $rows, string $separator = "\t", string $null_as = "\\\\N"): bool {}

/**
 * 将表复制到数组
 */
function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false {}

/**
 * 获取数据库名称
 */
function pg_dbname(?\PgSql\Connection $connection = NULL): string {}

/**
 * 删除记录
 */
function pg_delete(\PgSql\Connection $connection, string $table_name, array $conditions, int $flags = PGSQL_DML_EXEC): string|bool {}

/**
 * 与 PostgreSQL 后端同步
 */
function pg_end_copy(?\PgSql\Connection $connection = NULL): bool {}

function pg_errormessage(?\PgSql\Connection $connection = NULL): string {}

/**
 * 转义字符串以插入到 bytea 字段
 */
function pg_escape_bytea($connection, string $string = null): string {}

/**
 * Escape an identifier for insertion into a text field
 */
function pg_escape_identifier($connection, string $string = null): string|false {}

/**
 * Escape a literal for insertion into a text field
 */
function pg_escape_literal($connection, string $string = null): string|false {}

/**
 * 转义字符串以供查询
 */
function pg_escape_string($connection, string $string = null): string {}

function pg_exec($connection, string $query = null): \PgSql\Result|false {}

/**
 * Sends a request to execute a prepared statement with given parameters, and waits for the result
 */
function pg_execute($connection, $statement_name, array $params = null): \PgSql\Result|false {}

/**
 * 从结果中获取所有行作为数组
 */
function pg_fetch_all(\PgSql\Result $result, int $mode = PGSQL_ASSOC): array {}

/**
 * Fetches all rows in a particular result column as an array
 */
function pg_fetch_all_columns(\PgSql\Result $result, int $field = 0): array {}

/**
 * 获取一行作为数组
 */
function pg_fetch_array(\PgSql\Result $result, ?int $row = NULL, int $mode = PGSQL_BOTH): array|false {}

/**
 * 获取一行作为关联数组
 */
function pg_fetch_assoc(\PgSql\Result $result, ?int $row = NULL): array|false {}

/**
 * 获取一行作为对象
 */
function pg_fetch_object(\PgSql\Result $result, ?int $row = NULL, string $class = "stdClass", array $constructor_args = []): object|false {}

/**
 * 从结果实例返回值
 */
function pg_fetch_result(\PgSql\Result $result, $row, string|int $field = null): string|false|null {}

/**
 * 提取一行作为枚举数组
 */
function pg_fetch_row(\PgSql\Result $result, ?int $row = NULL, int $mode = PGSQL_NUM): array|false {}

/**
 * 测试字段是否为 SQL NULL
 */
function pg_field_is_null(\PgSql\Result $result, $row, string|int $field = null): int|false {}

/**
 * 返回字段名
 */
function pg_field_name(\PgSql\Result $result, int $field): string {}

/**
 * 返回名为 field 的字段编号
 */
function pg_field_num(\PgSql\Result $result, string $field): int {}

/**
 * 返回打印的长度
 */
function pg_field_prtlen(\PgSql\Result $result, $row, string|int $field = null): int|false {}

/**
 * 返回指定字段的内部存储大小
 */
function pg_field_size(\PgSql\Result $result, int $field): int {}

/**
 * Returns the name or oid of the tables field
 */
function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): string|int|false {}

/**
 * 返回相应字段编号的类型名称
 */
function pg_field_type(\PgSql\Result $result, int $field): string {}

/**
 * Returns the type ID (OID) for the corresponding field number
 */
function pg_field_type_oid(\PgSql\Result $result, int $field): string|int {}

function pg_fieldisnull(\PgSql\Result $result, $row, string|int $field = null): int|false {}

function pg_fieldname(\PgSql\Result $result, int $field): string {}

function pg_fieldnum(\PgSql\Result $result, string $field): int {}

function pg_fieldprtlen(\PgSql\Result $result, $row, string|int $field = null): int|false {}

function pg_fieldsize(\PgSql\Result $result, int $field): int {}

function pg_fieldtype(\PgSql\Result $result, int $field): string {}

/**
 * 刷新链接中已处理的数据查询
 */
function pg_flush(\PgSql\Connection $connection): int|bool {}

/**
 * 释放查询结果占用的内存
 */
function pg_free_result(\PgSql\Result $result): bool {}

function pg_freeresult(\PgSql\Result $result): bool {}

/**
 * 获取 SQL NOTIFY 消息
 */
function pg_get_notify(\PgSql\Connection $connection, int $mode = PGSQL_ASSOC): array|false {}

/**
 * 获取后端的进程 ID
 */
function pg_get_pid(\PgSql\Connection $connection): int {}

/**
 * 取得异步查询结果
 */
function pg_get_result(\PgSql\Connection $connection): \PgSql\Result|false {}

function pg_getlastoid(\PgSql\Result $result): string|int|false {}

/**
 * 返回和某连接关联的主机名
 */
function pg_host(?\PgSql\Connection $connection = NULL): string {}

/**
 * 将数组插入到表中
 */
function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = PGSQL_DML_EXEC): \PgSql\Result|string|bool {}

/**
 * Returns the JIT information of the server (PHP 8 >= 8.4.0)
 */
function pg_jit(?\PgSql\Connection $connection = NULL): array {}

/**
 * 得到某连接的最后一条错误信息
 */
function pg_last_error(?\PgSql\Connection $connection = NULL): string {}

/**
 * 返回 PostgreSQL 服务器最新一条公告信息
 */
function pg_last_notice(\PgSql\Connection $connection, int $mode = PGSQL_NOTICE_LAST): array|string|bool {}

/**
 * 返回上一条记录的 oid
 */
function pg_last_oid(\PgSql\Result $result): string|int|false {}

/**
 * 关闭大对象
 */
function pg_lo_close(\PgSql\Lob $lob): bool {}

/**
 * 新建大对象
 */
function pg_lo_create($connection = null, $oid = null): string|int|false {}

/**
 * 将大型对象导出到文件
 */
function pg_lo_export($connection, $oid = null, $filename = null): bool {}

/**
 * 将文件导入为大型对象
 */
function pg_lo_import($connection, $filename = null, $oid = null): string|int|false {}

/**
 * 打开大对象
 */
function pg_lo_open($connection, $oid = null, string $mode = null): \PgSql\Lob|false {}

/**
 * 读取大对象
 */
function pg_lo_read(\PgSql\Lob $lob, int $length = 8192): string|false {}

/**
 * 读取整个大对象并直接发送到浏览器
 */
function pg_lo_read_all(\PgSql\Lob $lob): int {}

/**
 * 在大对象中寻找位置
 */
function pg_lo_seek(\PgSql\Lob $lob, int $offset, int $whence = SEEK_CUR): bool {}

/**
 * 返回当前大型对象的指针位置
 */
function pg_lo_tell(\PgSql\Lob $lob): int {}

/**
 * Truncates a large object
 */
function pg_lo_truncate(\PgSql\Lob $lob, int $size): bool {}

/**
 * 删除一个大型对象
 */
function pg_lo_unlink($connection, $oid = null): bool {}

/**
 * 向大对象写入数据
 */
function pg_lo_write(\PgSql\Lob $lob, string $data, ?int $length = NULL): int|false {}

function pg_loclose(\PgSql\Lob $lob): bool {}

function pg_locreate($connection = null, $oid = null): string|int|false {}

function pg_loexport($connection, $oid = null, $filename = null): bool {}

function pg_loimport($connection, $filename = null, $oid = null): string|int|false {}

function pg_loopen($connection, $oid = null, string $mode = null): \PgSql\Lob|false {}

function pg_loread(\PgSql\Lob $lob, int $length = 8192): string|false {}

function pg_loreadall(\PgSql\Lob $lob): int {}

function pg_lounlink($connection, $oid = null): bool {}

function pg_lowrite(\PgSql\Lob $lob, string $data, ?int $length = NULL): int|false {}

/**
 * 获得表的元数据
 */
function pg_meta_data(\PgSql\Connection $connection, string $table_name, bool $extended = false): array|false {}

/**
 * 返回结果中字段的数量
 */
function pg_num_fields(\PgSql\Result $result): int {}

/**
 * 返回结果中行的数量
 */
function pg_num_rows(\PgSql\Result $result): int {}

function pg_numfields(\PgSql\Result $result): int {}

function pg_numrows(\PgSql\Result $result): int {}

/**
 * 获得和 connection 相关的选项
 */
function pg_options(?\PgSql\Connection $connection = NULL): string {}

/**
 * Looks up a current parameter setting of the server
 */
function pg_parameter_status($connection, string $name = null): string|false {}

/**
 * 打开一个持久的 PostgreSQL 连接
 */
function pg_pconnect(string $connection_string, int $flags = 0): \PgSql\Connection|false {}

/**
 * Ping 数据库连接
 */
function pg_ping(?\PgSql\Connection $connection = NULL): bool {}

/**
 * 返回 connection 相关的端口号
 */
function pg_port(?\PgSql\Connection $connection = NULL): string {}

/**
 * Submits a request to the server to create a prepared statement with the
   given parameters, and waits for completion
 */
function pg_prepare($connection, string $statement_name, string $query = null): \PgSql\Result|false {}

/**
 * Send data to the server during a COPY operation (PHP 8 >= 8.4.0)
 */
function pg_put_copy_data(\PgSql\Connection $connection, string $cmd): int {}

/**
 * Signal the completion of a COPY operation to the server (PHP 8 >= 8.4.0)
 */
function pg_put_copy_end(\PgSql\Connection $connection, ?string $error = NULL): int {}

/**
 * 向 PostgreSQL 后端发送以 NULL 字符结尾的字符串
 */
function pg_put_line($connection, string $query = null): bool {}

/**
 * 执行查询
 */
function pg_query($connection, string $query = null): \PgSql\Result|false {}

/**
 * Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text
 */
function pg_query_params($connection, $query, array $params = null): \PgSql\Result|false {}

function pg_result(\PgSql\Result $result, $row, string|int $field = null): string|false|null {}

/**
 * 获得跟 result 相关的错误信息
 */
function pg_result_error(\PgSql\Result $result): string|false {}

/**
 * Returns an individual field of an error report
 */
function pg_result_error_field(\PgSql\Result $result, int $field_code): string|false|null {}

/**
 * 在 result 实例中设定内部行偏移量
 */
function pg_result_seek(\PgSql\Result $result, int $row): bool {}

/**
 * 获得查询结果的状态
 */
function pg_result_status(\PgSql\Result $result, int $mode = PGSQL_STATUS_LONG): string|int {}

/**
 * 选择记录
 */
function pg_select(\PgSql\Connection $connection, string $table_name, array $conditions = [], int $flags = PGSQL_DML_EXEC, int $mode = PGSQL_ASSOC): array|string|false {}

/**
 * Sends a request to execute a prepared statement with given parameters, without waiting for the result(s)
 */
function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): int|bool {}

/**
 * Sends a request to create a prepared statement with the given parameters, without waiting for completion
 */
function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): int|bool {}

/**
 * 发送异步查询
 */
function pg_send_query(\PgSql\Connection $connection, string $query): int|bool {}

/**
 * Submits a command and separate parameters to the server without waiting for the result(s)
 */
function pg_send_query_params(\PgSql\Connection $connection, string $query, array $params): int|bool {}

/**
 * 设定客户端编码
 */
function pg_set_client_encoding($connection, string $encoding = null): int {}

/**
 * Determines the visibility of the context's error messages returned by pg_last_error
   and pg_result_error (PHP 8 >= 8.3.0)
 */
function pg_set_error_context_visibility(\PgSql\Connection $connection, int $visibility): int {}

/**
 * Determines the verbosity of messages returned by pg_last_error 
   and pg_result_error
 */
function pg_set_error_verbosity($connection, int $verbosity = null): int|false {}

function pg_setclientencoding($connection, string $encoding = null): int {}

/**
 * Get a read only handle to the socket underlying a PostgreSQL connection
 */
function pg_socket(\PgSql\Connection $connection) {}

/**
 * Poll a PostgreSQL connection socket for read/write readiness (PHP 8 >= 8.4.0)
 */
function pg_socket_poll($socket, int $read, int $write, int $timeout = -1): int {}

/**
 * 启用 PostgreSQL 连接的追踪
 */
function pg_trace(string $filename, string $mode = "w", ?\PgSql\Connection $connection = NULL, int $trace_mode = 0): bool {}

/**
 * Returns the current in-transaction status of the server
 */
function pg_transaction_status(\PgSql\Connection $connection): int {}

/**
 * 返回跟连接相关的 tty 名
 */
function pg_tty(?\PgSql\Connection $connection = NULL): string {}

/**
 * 反转义 bytea 类型的二进制数据
 */
function pg_unescape_bytea(string $string): string {}

/**
 * 禁用 PostgreSQL 连接的追踪
 */
function pg_untrace(?\PgSql\Connection $connection = NULL): true {}

/**
 * 更新表
 */
function pg_update(\PgSql\Connection $connection, string $table_name, array $values, array $conditions, int $flags = PGSQL_DML_EXEC): string|bool {}

/**
 * Returns an array with client, protocol and server version (when available)
 */
function pg_version(?\PgSql\Connection $connection = NULL): array {}

/**
 * 取得已加载的 php.ini 文件的路径
 */
function php_ini_loaded_file(): string|false {}

/**
 * 返回从额外 ini 目录里解析的 .ini 文件列表
 */
function php_ini_scanned_files(): string|false {}

/**
 * 返回 web 服务器和 PHP 之间的接口类型
 */
function php_sapi_name(): string|false {}

/**
 * 返回删除注释和空格后的PHP源码
 */
function php_strip_whitespace(string $filename): string {}

/**
 * 返回运行 PHP 的系统的有关信息
 */
function php_uname(string $mode = "a"): string {}

/**
 * 打印 PHP 贡献者名单
 */
function phpcredits(int $flags = CREDITS_ALL): true {}

/**
 * 输出关于 PHP 配置的信息
 */
function phpinfo(int $flags = INFO_ALL): true {}

/**
 * 获取当前的PHP版本
 */
function phpversion(?string $extension = NULL): string|false {}

/**
 * 得到圆周率值
 */
function pi(): float {}

/**
 * 打开进程文件指针
 */
function popen(string $command, string $mode) {}

/**
 * current 的别名
 */
function pos(object|array $array): mixed {}

/**
 * 指数表达式
 */
function pow(mixed $num, mixed $exponent): object|int|float {}

/**
 * 执行一个正则表达式搜索和替换
 */
function preg_filter(array|string $pattern, array|string $replacement, array|string $subject, int $limit = -1, &$count = NULL): array|string|null {}

/**
 * 返回匹配模式的数组条目
 */
function preg_grep(string $pattern, array $array, int $flags = 0): array|false {}

/**
 * 返回最后一个PCRE正则执行产生的错误代码
 */
function preg_last_error(): int {}

/**
 * 返回最后一个 PCRE 正则表达式执行产生的错误信息
 */
function preg_last_error_msg(): string {}

/**
 * 执行匹配正则表达式
 */
function preg_match(string $pattern, string $subject, &$matches = NULL, int $flags = 0, int $offset = 0): int|false {}

/**
 * 执行一个全局正则表达式匹配
 */
function preg_match_all(string $pattern, string $subject, &$matches = NULL, int $flags = 0, int $offset = 0): int|false {}

/**
 * 转义正则表达式字符
 */
function preg_quote(string $str, ?string $delimiter = NULL): string {}

/**
 * 执行一个正则表达式的搜索和替换
 */
function preg_replace(array|string $pattern, array|string $replacement, array|string $subject, int $limit = -1, &$count = NULL): array|string|null {}

/**
 * 执行一个正则表达式搜索并且使用一个回调进行替换
 */
function preg_replace_callback(array|string $pattern, callable $callback, array|string $subject, int $limit = -1, &$count = NULL, int $flags = 0): array|string|null {}

/**
 * 执行一个正则表达式搜索并使用回调进行替换
 */
function preg_replace_callback_array(array $pattern, array|string $subject, int $limit = -1, &$count = NULL, int $flags = 0): array|string|null {}

/**
 * 通过一个正则表达式分隔字符串
 */
function preg_split(string $pattern, string $subject, int $limit = -1, int $flags = 0): array|false {}

/**
 * 将数组的内部指针倒回一位
 */
function prev(object|array &$array): mixed {}

/**
 * 打印人类可读的变量信息
 */
function print_r(mixed $value, bool $return = false): string|true {}

/**
 * 输出格式化字符串
 */
function printf(string $format, mixed ...$values): int {}

/**
 * 关闭由 proc_open 打开的进程并且返回进程退出码
 */
function proc_close($process): int {}

/**
 * 获取由 proc_open 函数打开的进程的信息
 */
function proc_get_status($process): array {}

/**
 * 修改当前进程的优先级
 */
function proc_nice(int $priority): bool {}

/**
 * 执行一个命令，并且打开用来输入/输出的文件指针。
 */
function proc_open(array|string $command, array $descriptor_spec, &$pipes, ?string $cwd = NULL, ?array $env_vars = NULL, ?array $options = NULL) {}

/**
 * 杀死由 proc_open 打开的进程
 */
function proc_terminate($process, int $signal = 15): bool {}

/**
 * 检查对象或类是否具有该属性
 */
function property_exists($object_or_class, string $property): bool {}

/**
 * 设置环境变量的值
 */
function putenv(string $assignment): bool {}

/**
 * 将 quoted-printable 字符串转换为 8-bit 字符串
 */
function quoted_printable_decode(string $string): string {}

/**
 * 将 8-bit 字符串转换成 quoted-printable 字符串
 */
function quoted_printable_encode(string $string): string {}

/**
 * 转义元字符集
 */
function quotemeta(string $string): string {}

/**
 * 将弧度数转换为相应的角度数
 */
function rad2deg(float $num): float {}

/**
 * 产生一个随机整数
 */
function rand(int $min = null, int $max = null): int {}

/**
 * Get cryptographically secure random bytes
 */
function random_bytes(int $length): string {}

/**
 * 获取生成加密安全、均匀分布的整数
 */
function random_int(int $min, int $max): int {}

/**
 * 根据范围创建数组，包含指定的元素
 */
function range(string|int|float $start, string|int|float $end, int|float $step = 1): array {}

/**
 * 对已编码的 URL 字符串进行解码
 */
function rawurldecode(string $string): string {}

/**
 * 按照 RFC 3986 对 URL 进行编码
 */
function rawurlencode(string $string): string {}

/**
 * 从目录句柄中读取条目
 */
function readdir($dir_handle = NULL): string|false {}

/**
 * 输出文件
 */
function readfile(string $filename, bool $use_include_path = false, $context = NULL): int|false {}

/**
 * Output a gz-file
 */
function readgzfile(string $filename, bool $use_include_path = false): int|false {}

/**
 * 读取一行
 */
function readline(?string $prompt = NULL): string|false {}

/**
 * 添加一行到历史
 */
function readline_add_history(string $prompt): true {}

/**
 * 清除历史
 */
function readline_clear_history(): true {}

/**
 * 注册完成函数
 */
function readline_completion_function(callable $callback): bool {}

/**
 * 获取/设置各种 readline 内部变量
 */
function readline_info(?string $var_name = NULL, $value = NULL): mixed {}

/**
 * 获取历史
 */
function readline_list_history(): array {}

/**
 * 读取历史
 */
function readline_read_history(?string $filename = NULL): bool {}

/**
 * 写入历史记录
 */
function readline_write_history(?string $filename = NULL): bool {}

/**
 * 返回符号连接指向的目标
 */
function readlink(string $path): string|false {}

/**
 * 返回规范化的绝对路径名
 */
function realpath(string $path): string|false {}

/**
 * 获取真实目录缓存的详情
 */
function realpath_cache_get(): array {}

/**
 * 获取真实路径缓冲区的大小
 */
function realpath_cache_size(): int {}

/**
 * 注册在关闭时执行的函数
 */
function register_shutdown_function(callable $callback, mixed ...$args): void {}

/**
 * 注册一个函数以便在每个 tick 上执行
 */
function register_tick_function(callable $callback, mixed ...$args): bool {}

/**
 * 重命名一个文件或目录
 */
function rename(string $from, string $to, $context = NULL): bool {}

/**
 * Read and parse the request body and return the result (PHP 8 >= 8.4.0)
 */
function request_parse_body(?array $options = NULL): array {}

/**
 * 将数组的内部指针指向第一个单元
 */
function reset(object|array &$array): mixed {}

function resourcebundle_count(\ResourceBundle $bundle): int {}

function resourcebundle_create(?string $locale, ?string $bundle, bool $fallback = true): ?\ResourceBundle {}

function resourcebundle_get(\ResourceBundle $bundle, string|int $index, bool $fallback = true): \ResourceBundle|array|string|int|null {}

function resourcebundle_get_error_code(\ResourceBundle $bundle): int {}

function resourcebundle_get_error_message(\ResourceBundle $bundle): string {}

function resourcebundle_locales(string $bundle): array|false {}

/**
 * 还原之前的错误处理函数
 */
function restore_error_handler(): true {}

/**
 * 恢复之前定义过的异常处理函数。
 */
function restore_exception_handler(): true {}

/**
 * 倒回文件指针的位置
 */
function rewind($stream): bool {}

/**
 * 倒回目录句柄
 */
function rewinddir($dir_handle = NULL): void {}

/**
 * 删除目录
 */
function rmdir(string $directory, $context = NULL): bool {}

/**
 * 对浮点数进行四舍五入
 */
function round(int|float $num, int $precision = 0, \RoundingMode|int $mode = RoundingMode::HalfAwayFromZero): float {}

/**
 * 对数组降序排序
 */
function rsort(array &$array, int $flags = SORT_REGULAR): true {}

/**
 * 去除字符串末尾的空白字符（或者其他字符）
 */
function rtrim(string $string, string $characters = " \n\r\t\v\x00"): string {}

/**
 * Convert string from one codepage to another
 */
function sapi_windows_cp_conv(string|int $in_codepage, string|int $out_codepage, string $subject): ?string {}

/**
 * Get current codepage
 */
function sapi_windows_cp_get(string $kind = ""): int {}

/**
 * Indicates whether the codepage is UTF-8 compatible
 */
function sapi_windows_cp_is_utf8(): bool {}

/**
 * Set process codepage
 */
function sapi_windows_cp_set(int $codepage): bool {}

/**
 * Send a CTRL event to another process
 */
function sapi_windows_generate_ctrl_event(int $event, int $pid = 0): bool {}

/**
 * Set or remove a CTRL event handler
 */
function sapi_windows_set_ctrl_handler(?callable $handler, bool $add = true): bool {}

/**
 * Get or set VT100 support for the specified stream associated to an output buffer of a Windows console.
 */
function sapi_windows_vt100_support($stream, ?bool $enable = NULL): bool {}

/**
 * 列出指定路径中的文件和目录
 */
function scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, $context = NULL): array|false {}

/**
 * 生成值的可存储表示
 */
function serialize(mixed $value): string {}

/**
 * 丢弃会话数组的更改并结束会话
 */
function session_abort(): bool {}

/**
 * 返回/设置当前缓存的到期时间
 */
function session_cache_expire(?int $value = NULL): int|false {}

/**
 * 读取/设置缓存限制器
 */
function session_cache_limiter(?string $value = NULL): string|false {}

/**
 * session_write_close 的别名
 */
function session_commit(): bool {}

/**
 * 创建新的会话 ID
 */
function session_create_id(string $prefix = ""): string|false {}

/**
 * 解码会话数据
 */
function session_decode(string $data): bool {}

/**
 * 销毁一个会话中的全部数据
 */
function session_destroy(): bool {}

/**
 * 将当前会话数据编码为字符串
 */
function session_encode(): string|false {}

/**
 * 执行会话数据垃圾回收
 */
function session_gc(): int|false {}

/**
 * 获取会话 cookie 参数
 */
function session_get_cookie_params(): array {}

/**
 * 获取/设置当前会话 ID
 */
function session_id(?string $id = NULL): string|false {}

/**
 * 获取/设置会话模块名称
 */
function session_module_name(?string $module = NULL): string|false {}

/**
 * 读取/设置会话名称
 */
function session_name(?string $name = NULL): string|false {}

/**
 * 使用新生成的会话 ID 更新现有会话 ID
 */
function session_regenerate_id(bool $delete_old_session = false): bool {}

/**
 * 关闭会话
 */
function session_register_shutdown(): void {}

/**
 * 使用会话存储中的原始值重新初始化会话数组
 */
function session_reset(): bool {}

/**
 * 读取/设置当前会话的保存路径
 */
function session_save_path(?string $path = NULL): string|false {}

/**
 * 设置会话 cookie 参数
 */
function session_set_cookie_params(array|int $lifetime_or_options, ?string $path = NULL, ?string $domain = NULL, ?bool $secure = NULL, ?bool $httponly = NULL): bool {}

/**
 * 设置用户自定义会话存储函数
 */
function session_set_save_handler($open, $close = null, callable $read = null, callable $write = null, callable $destroy = null, callable $gc = null, ?callable $create_sid = NULL, ?callable $validate_sid = NULL, ?callable $update_timestamp = NULL): bool {}

/**
 * 启动新会话或者重用现有会话
 */
function session_start(array $options = []): bool {}

/**
 * 返回当前会话状态
 */
function session_status(): int {}

/**
 * 释放所有的会话变量
 */
function session_unset(): bool {}

/**
 * Write session data and end session
 */
function session_write_close(): bool {}

/**
 * 设置用户自定义的错误处理函数
 */
function set_error_handler(?callable $callback, int $error_levels = E_ALL) {}

/**
 * 设置用户自定义的异常处理函数
 */
function set_exception_handler(?callable $callback) {}

/**
 * stream_set_write_buffer 的别名
 */
function set_file_buffer($stream, int $size): int {}

/**
 * 设置 include_path 配置选项
 */
function set_include_path(string $include_path): string|false {}

/**
 * 设置脚本最大执行时间
 */
function set_time_limit(int $seconds): bool {}

/**
 * 发送 Cookie
 */
function setcookie(string $name, string $value = "", array|int $expires_or_options = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool {}

/**
 * 设置区域信息
 */
function setlocale(int $category, $locales, ...$rest): string|false {}

/**
 * 发送未经 URL 编码的 cookie
 */
function setrawcookie(string $name, string $value = "", array|int $expires_or_options = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool {}

/**
 * 设置变量的类型
 */
function settype(mixed &$var, string $type): bool {}

/**
 * 计算字符串的 sha1 散列值
 */
function sha1(string $string, bool $binary = false): string {}

/**
 * 计算文件的 sha1 散列值
 */
function sha1_file(string $filename, bool $binary = false): string|false {}

/**
 * 通过 shell 执行命令并将完整的输出以字符串的方式返回
 */
function shell_exec(string $command): string|false|null {}

/**
 * Close shared memory block
 */
function shmop_close(\Shmop $shmop): void {}

/**
 * Delete shared memory block
 */
function shmop_delete(\Shmop $shmop): bool {}

/**
 * Create or open shared memory block
 */
function shmop_open(int $key, string $mode, int $permissions, int $size): \Shmop|false {}

/**
 * Read data from shared memory block
 */
function shmop_read(\Shmop $shmop, int $offset, int $size): string {}

/**
 * Get size of shared memory block
 */
function shmop_size(\Shmop $shmop): int {}

/**
 * Write data into shared memory block
 */
function shmop_write(\Shmop $shmop, string $data, int $offset): int {}

/**
 * 别名 highlight_file
 */
function show_source(string $filename, bool $return = false): string|bool {}

/**
 * 打乱数组
 */
function shuffle(array &$array): true {}

/**
 * 计算两个字符串的相似度
 */
function similar_text(string $string1, string $string2, &$percent = NULL): int {}

/**
 * Get a SimpleXMLElement object from an XML or HTML node
 */
function simplexml_import_dom(object $node, ?string $class_name = "SimpleXMLElement"): ?\SimpleXMLElement {}

/**
 * Interprets an XML file into an object
 */
function simplexml_load_file(string $filename, ?string $class_name = "SimpleXMLElement", int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): \SimpleXMLElement|false {}

/**
 * Interprets a string of XML into an object
 */
function simplexml_load_string(string $data, ?string $class_name = "SimpleXMLElement", int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): \SimpleXMLElement|false {}

/**
 * 正弦
 */
function sin(float $num): float {}

/**
 * 双曲正弦
 */
function sinh(float $num): float {}

/**
 * count 的别名
 */
function sizeof(\Countable|array $value, int $mode = COUNT_NORMAL): int {}

/**
 * 延缓执行
 */
function sleep(int $seconds): int {}

/**
 * 接受套接字上的连接
 */
function socket_accept(\Socket $socket): \Socket|false {}

/**
 * 从给定的 addrinfo 创建并绑定一个套接字
 */
function socket_addrinfo_bind(\AddressInfo $address): \Socket|false {}

/**
 * 指定 addrinfo 创建并连接套接字
 */
function socket_addrinfo_connect(\AddressInfo $address): \Socket|false {}

/**
 * 获取有关 addrinfo 的信息
 */
function socket_addrinfo_explain(\AddressInfo $address): array {}

/**
 * 获取数组，包含有关给定主机名的 getaddrinfo 内容
 */
function socket_addrinfo_lookup(string $host, ?string $service = NULL, array $hints = []): array|false {}

/**
 * 给套接字绑定名字
 */
function socket_bind(\Socket $socket, string $address, int $port = 0): bool {}

/**
 * 清除套接字或者最后的错误代码上的错误
 */
function socket_clear_error(?\Socket $socket = NULL): void {}

/**
 * 关闭 Socket 实例
 */
function socket_close(\Socket $socket): void {}

/**
 * Calculate message buffer size
 */
function socket_cmsg_space(int $level, int $type, int $num = 0): ?int {}

/**
 * 开启一个套接字连接
 */
function socket_connect(\Socket $socket, string $address, ?int $port = NULL): bool {}

/**
 * 创建一个套接字（通讯节点）
 */
function socket_create(int $domain, int $type, int $protocol): \Socket|false {}

/**
 * 在端口上打开一个套接字以接受连接
 */
function socket_create_listen(int $port, int $backlog = SOMAXCONN): \Socket|false {}

/**
 * 创建一对彼此连接的套接字，并用数组存储
 */
function socket_create_pair(int $domain, int $type, int $protocol, &$pair): bool {}

/**
 * Export a socket into a stream that encapsulates a socket
 */
function socket_export_stream(\Socket $socket) {}

/**
 * 获取套接字的套接字选项
 */
function socket_get_option(\Socket $socket, int $level, int $option): array|int|false {}

/**
 * 别名 stream_get_meta_data
 */
function socket_get_status($stream): array {}

/**
 * 别名 socket_get_option
 */
function socket_getopt(\Socket $socket, int $level, int $option): array|int|false {}

/**
 * 获取套接字远端名字
 */
function socket_getpeername(\Socket $socket, &$address, &$port = NULL): bool {}

/**
 * 获取套接字本地端的名字，返回主机名和端口号或是 Unix 文件系统路径，具体取决于套接字类型
 */
function socket_getsockname(\Socket $socket, &$address, &$port = NULL): bool {}

/**
 * 导入 stream
 */
function socket_import_stream($stream): \Socket|false {}

/**
 * 返回套接字上的最后一个错误
 */
function socket_last_error(?\Socket $socket = NULL): int {}

/**
 * 监听套接字的连接
 */
function socket_listen(\Socket $socket, int $backlog = 0): bool {}

/**
 * 从套接字中读取最大长度的数据
 */
function socket_read(\Socket $socket, int $length, int $mode = PHP_BINARY_READ): string|false {}

/**
 * 从已连接的 socket 接收数据
 */
function socket_recv(\Socket $socket, &$data, int $length, int $flags): int|false {}

/**
 * 从套接字接收数据，无论它是否是面向连接的
 */
function socket_recvfrom(\Socket $socket, &$data, int $length, int $flags, &$address, &$port = NULL): int|false {}

/**
 * Read a message
 */
function socket_recvmsg(\Socket $socket, array &$message, int $flags = 0): int|false {}

/**
 * 从给定套接字数组运行带指定超时时间的 select() 系统调用
 */
function socket_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, int $microseconds = 0): int|false {}

/**
 * 向已连接的套接字发送数据
 */
function socket_send(\Socket $socket, string $data, int $length, int $flags): int|false {}

/**
 * Send a message
 */
function socket_sendmsg(\Socket $socket, array $message, int $flags = 0): int|false {}

/**
 * 向套接字发送消息，无论它是否已建立连接
 */
function socket_sendto(\Socket $socket, string $data, int $length, int $flags, string $address, ?int $port = NULL): int|false {}

/**
 * 设置套接字为阻塞模式
 */
function socket_set_block(\Socket $socket): bool {}

/**
 * 别名 stream_set_blocking
 */
function socket_set_blocking($stream, bool $enable): bool {}

/**
 * 设置套接字为非阻塞模式
 */
function socket_set_nonblock(\Socket $socket): bool {}

/**
 * 为套接字设置套接字选项
 */
function socket_set_option(\Socket $socket, int $level, int $option, $value): bool {}

/**
 * 别名 stream_set_timeout
 */
function socket_set_timeout($stream, int $seconds, int $microseconds = 0): bool {}

/**
 * 别名 socket_set_option
 */
function socket_setopt(\Socket $socket, int $level, int $option, $value): bool {}

/**
 * 关闭套接字接收或发送，或两者都关闭
 */
function socket_shutdown(\Socket $socket, int $mode = 2): bool {}

/**
 * 返回描述套接字错误的字符串
 */
function socket_strerror(int $error_code): string {}

/**
 * 向套接字写数据
 */
function socket_write(\Socket $socket, string $data, ?int $length = NULL): int|false {}

/**
 * 导出 WSAPROTOCOL_INFO 结构体
 */
function socket_wsaprotocol_info_export(\Socket $socket, int $process_id): string|false {}

/**
 * 从另一个进程导入套接字
 */
function socket_wsaprotocol_info_import(string $info_id): \Socket|false {}

/**
 * 释放已导出的 WSAPROTOCOL_INFO 结构体
 */
function socket_wsaprotocol_info_release(string $info_id): bool {}

/**
 * Add large numbers
 */
function sodium_add(string &$string1, string $string2): void {}

/**
 * Decodes a base64-encoded string into raw binary.
 */
function sodium_base642bin(string $string, int $id, string $ignore = ""): string {}

/**
 * Encodes a raw binary string with base64.
 */
function sodium_bin2base64(string $string, int $id): string {}

/**
 * Encode to hexadecimal
 */
function sodium_bin2hex(string $string): string {}

/**
 * Compare large numbers
 */
function sodium_compare(string $string1, string $string2): int {}

/**
 * Verify then decrypt a message with AEGIS-128L (PHP 8 >= 8.4.0)
 */
function sodium_crypto_aead_aegis128l_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

/**
 * Encrypt then authenticate a message with AEGIS-128L (PHP 8 >= 8.4.0)
 */
function sodium_crypto_aead_aegis128l_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

/**
 * Generate a random AEGIS-128L key (PHP 8 >= 8.4.0)
 */
function sodium_crypto_aead_aegis128l_keygen(): string {}

/**
 * Verify then decrypt a message with AEGIS-256 (PHP 8 >= 8.4.0)
 */
function sodium_crypto_aead_aegis256_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

/**
 * Encrypt then authenticate a message with AEGIS-256 (PHP 8 >= 8.4.0)
 */
function sodium_crypto_aead_aegis256_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

/**
 * Generate a random AEGIS-256 key (PHP 8 >= 8.4.0)
 */
function sodium_crypto_aead_aegis256_keygen(): string {}

/**
 * 使用 AES-256-GCM 验证并解密消息
 */
function sodium_crypto_aead_aes256gcm_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

/**
 * 使用 AES-256-GCM 加密并认证
 */
function sodium_crypto_aead_aes256gcm_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

/**
 * 检查硬件是否支持 AES256-GCM
 */
function sodium_crypto_aead_aes256gcm_is_available(): bool {}

/**
 * 生成随机 AES-256-GCM 密钥
 */
function sodium_crypto_aead_aes256gcm_keygen(): string {}

/**
 * Verify then decrypt with ChaCha20-Poly1305
 */
function sodium_crypto_aead_chacha20poly1305_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

/**
 * Encrypt then authenticate with ChaCha20-Poly1305
 */
function sodium_crypto_aead_chacha20poly1305_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

/**
 * Verify that the ciphertext includes a valid tag
 */
function sodium_crypto_aead_chacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

/**
 * Encrypt a message
 */
function sodium_crypto_aead_chacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

/**
 * Generate a random ChaCha20-Poly1305 (IETF) key.
 */
function sodium_crypto_aead_chacha20poly1305_ietf_keygen(): string {}

/**
 * Generate a random ChaCha20-Poly1305 key.
 */
function sodium_crypto_aead_chacha20poly1305_keygen(): string {}

/**
 * (Preferred) Verify then decrypt with XChaCha20-Poly1305
 */
function sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

/**
 * (Preferred) Encrypt then authenticate with XChaCha20-Poly1305
 */
function sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

/**
 * Generate a random XChaCha20-Poly1305 key.
 */
function sodium_crypto_aead_xchacha20poly1305_ietf_keygen(): string {}

/**
 * Compute a tag for the message
 */
function sodium_crypto_auth(string $message, string $key): string {}

/**
 * Generate a random key for sodium_crypto_auth
 */
function sodium_crypto_auth_keygen(): string {}

/**
 * Verifies that the tag is valid for the message
 */
function sodium_crypto_auth_verify(string $mac, string $message, string $key): bool {}

/**
 * Authenticated public-key encryption
 */
function sodium_crypto_box(string $message, string $nonce, string $key_pair): string {}

/**
 * Randomly generate a secret key and a corresponding public key
 */
function sodium_crypto_box_keypair(): string {}

/**
 * Create a unified keypair string from a secret key and public key
 */
function sodium_crypto_box_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {}

/**
 * Authenticated public-key decryption
 */
function sodium_crypto_box_open(string $ciphertext, string $nonce, string $key_pair): string|false {}

/**
 * Extract the public key from a crypto_box keypair
 */
function sodium_crypto_box_publickey(string $key_pair): string {}

/**
 * Calculate the public key from a secret key
 */
function sodium_crypto_box_publickey_from_secretkey(string $secret_key): string {}

/**
 * Anonymous public-key encryption
 */
function sodium_crypto_box_seal(string $message, string $public_key): string {}

/**
 * Anonymous public-key decryption
 */
function sodium_crypto_box_seal_open(string $ciphertext, string $key_pair): string|false {}

/**
 * Extracts the secret key from a crypto_box keypair
 */
function sodium_crypto_box_secretkey(string $key_pair): string {}

/**
 * Deterministically derive the key pair from a single key
 */
function sodium_crypto_box_seed_keypair(string $seed): string {}

/**
 * Adds an element (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_add(string $p, string $q): string {}

/**
 * Maps a vector (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_from_hash(string $s): string {}

/**
 * Determines if a point on the ristretto255 curve (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_is_valid_point(string $s): bool {}

/**
 * Generates a random key (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_random(): string {}

/**
 * Adds a scalar value (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_add(string $x, string $y): string {}

/**
 * The sodium_crypto_core_ristretto255_scalar_complement purpose (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_complement(string $s): string {}

/**
 * Inverts a scalar value (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_invert(string $s): string {}

/**
 * Multiplies a scalar value (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_mul(string $x, string $y): string {}

/**
 * Negates a scalar value (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_negate(string $s): string {}

/**
 * Generates a random key (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_random(): string {}

/**
 * Reduces a scalar value (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_reduce(string $s): string {}

/**
 * Subtracts a scalar value (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_scalar_sub(string $x, string $y): string {}

/**
 * Subtracts an element (PHP 8 >= 8.1.0)
 */
function sodium_crypto_core_ristretto255_sub(string $p, string $q): string {}

/**
 * Get a hash of the message
 */
function sodium_crypto_generichash(string $message, string $key = "", int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

/**
 * Complete the hash
 */
function sodium_crypto_generichash_final(string &$state, int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

/**
 * Initialize a hash for streaming
 */
function sodium_crypto_generichash_init(string $key = "", int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

/**
 * Generate a random generichash key
 */
function sodium_crypto_generichash_keygen(): string {}

/**
 * Add message to a hash
 */
function sodium_crypto_generichash_update(string &$state, string $message): true {}

/**
 * Derive a subkey
 */
function sodium_crypto_kdf_derive_from_key(int $subkey_length, int $subkey_id, string $context, string $key): string {}

/**
 * Generate a random root key for the KDF interface
 */
function sodium_crypto_kdf_keygen(): string {}

/**
 * Calculate the client-side session keys.
 */
function sodium_crypto_kx_client_session_keys(string $client_key_pair, string $server_key): array {}

/**
 * Creates a new sodium keypair
 */
function sodium_crypto_kx_keypair(): string {}

/**
 * Extract the public key from a crypto_kx keypair
 */
function sodium_crypto_kx_publickey(string $key_pair): string {}

/**
 * Extract the secret key from a crypto_kx keypair.
 */
function sodium_crypto_kx_secretkey(string $key_pair): string {}

/**
 * Description
 */
function sodium_crypto_kx_seed_keypair(string $seed): string {}

/**
 * Calculate the server-side session keys.
 */
function sodium_crypto_kx_server_session_keys(string $server_key_pair, string $client_key): array {}

/**
 * Derive a key from a password, using Argon2
 */
function sodium_crypto_pwhash(int $length, string $password, string $salt, int $opslimit, int $memlimit, int $algo = SODIUM_CRYPTO_PWHASH_ALG_DEFAULT): string {}

/**
 * Derives a key from a password, using scrypt
 */
function sodium_crypto_pwhash_scryptsalsa208sha256(int $length, string $password, string $salt, int $opslimit, int $memlimit): string {}

/**
 * Get an ASCII encoded hash
 */
function sodium_crypto_pwhash_scryptsalsa208sha256_str(string $password, int $opslimit, int $memlimit): string {}

/**
 * Verify that the password is a valid password verification string
 */
function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify(string $hash, string $password): bool {}

/**
 * Get an ASCII-encoded hash
 */
function sodium_crypto_pwhash_str(string $password, int $opslimit, int $memlimit): string {}

/**
 * Determine whether or not to rehash a password
 */
function sodium_crypto_pwhash_str_needs_rehash(string $password, int $opslimit, int $memlimit): bool {}

/**
 * Verifies that a password matches a hash
 */
function sodium_crypto_pwhash_str_verify(string $hash, string $password): bool {}

/**
 * Compute a shared secret given a user's secret key and another user's public key
 */
function sodium_crypto_scalarmult(string $n, string $p): string {}

/**
 * 别名 sodium_crypto_box_publickey_from_secretkey
 */
function sodium_crypto_scalarmult_base(string $secret_key): string {}

/**
 * Computes a shared secret (PHP 8 >= 8.1.1)
 */
function sodium_crypto_scalarmult_ristretto255(string $n, string $p): string {}

/**
 * Calculates the public key from a secret key (PHP 8 >= 8.1.1)
 */
function sodium_crypto_scalarmult_ristretto255_base(string $n): string {}

/**
 * Authenticated shared-key encryption
 */
function sodium_crypto_secretbox(string $message, string $nonce, string $key): string {}

/**
 * Generate random key for sodium_crypto_secretbox
 */
function sodium_crypto_secretbox_keygen(): string {}

/**
 * Authenticated shared-key decryption
 */
function sodium_crypto_secretbox_open(string $ciphertext, string $nonce, string $key): string|false {}

/**
 * Initialize a secretstream context for decryption
 */
function sodium_crypto_secretstream_xchacha20poly1305_init_pull(string $header, string $key): string {}

/**
 * Initialize a secretstream context for encryption
 */
function sodium_crypto_secretstream_xchacha20poly1305_init_push(string $key): array {}

/**
 * Generate a random secretstream key.
 */
function sodium_crypto_secretstream_xchacha20poly1305_keygen(): string {}

/**
 * Decrypt a chunk of data from an encrypted stream
 */
function sodium_crypto_secretstream_xchacha20poly1305_pull(string &$state, string $ciphertext, string $additional_data = ""): array|false {}

/**
 * Encrypt a chunk of data so that it can safely be decrypted in a streaming API
 */
function sodium_crypto_secretstream_xchacha20poly1305_push(string &$state, string $message, string $additional_data = "", int $tag = SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE): string {}

/**
 * Explicitly rotate the key in the secretstream state
 */
function sodium_crypto_secretstream_xchacha20poly1305_rekey(string &$state): void {}

/**
 * Compute a short hash of a message and key
 */
function sodium_crypto_shorthash(string $message, string $key): string {}

/**
 * Get random bytes for key
 */
function sodium_crypto_shorthash_keygen(): string {}

/**
 * Sign a message
 */
function sodium_crypto_sign(string $message, string $secret_key): string {}

/**
 * Sign the message
 */
function sodium_crypto_sign_detached(string $message, string $secret_key): string {}

/**
 * Convert an Ed25519 public key to a Curve25519 public key
 */
function sodium_crypto_sign_ed25519_pk_to_curve25519(string $public_key): string {}

/**
 * Convert an Ed25519 secret key to a Curve25519 secret key
 */
function sodium_crypto_sign_ed25519_sk_to_curve25519(string $secret_key): string {}

/**
 * Randomly generate a secret key and a corresponding public key
 */
function sodium_crypto_sign_keypair(): string {}

/**
 * Join a secret key and public key together
 */
function sodium_crypto_sign_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {}

/**
 * Check that the signed message has a valid signature
 */
function sodium_crypto_sign_open(string $signed_message, string $public_key): string|false {}

/**
 * Extract the Ed25519 public key from a keypair
 */
function sodium_crypto_sign_publickey(string $key_pair): string {}

/**
 * Extract the Ed25519 public key from the secret key
 */
function sodium_crypto_sign_publickey_from_secretkey(string $secret_key): string {}

/**
 * Extract the Ed25519 secret key from a keypair
 */
function sodium_crypto_sign_secretkey(string $key_pair): string {}

/**
 * Deterministically derive the key pair from a single key
 */
function sodium_crypto_sign_seed_keypair(string $seed): string {}

/**
 * Verify signature for the message
 */
function sodium_crypto_sign_verify_detached(string $signature, string $message, string $public_key): bool {}

/**
 * Generate a deterministic sequence of bytes from a seed
 */
function sodium_crypto_stream(int $length, string $nonce, string $key): string {}

/**
 * Generate a random sodium_crypto_stream key.
 */
function sodium_crypto_stream_keygen(): string {}

/**
 * Expands the key and nonce into a keystream of pseudorandom bytes (PHP 8 >= 8.1.0)
 */
function sodium_crypto_stream_xchacha20(int $length, string $nonce, string $key): string {}

/**
 * Returns a secure random key (PHP 8 >= 8.1.0)
 */
function sodium_crypto_stream_xchacha20_keygen(): string {}

/**
 * Encrypts a message using a nonce and a secret key (no authentication) (PHP 8 >= 8.1.0)
 */
function sodium_crypto_stream_xchacha20_xor(string $message, string $nonce, string $key): string {}

/**
 * Encrypts a message using a nonce and a secret key (no authentication) (PHP 8 >= 8.2.0)
 */
function sodium_crypto_stream_xchacha20_xor_ic(string $message, string $nonce, int $counter, string $key): string {}

/**
 * Encrypt a message without authentication
 */
function sodium_crypto_stream_xor(string $message, string $nonce, string $key): string {}

/**
 * Decodes a hexadecimally encoded binary string
 */
function sodium_hex2bin(string $string, string $ignore = ""): string {}

/**
 * Increment large number
 */
function sodium_increment(string &$string): void {}

/**
 * Test for equality in constant-time
 */
function sodium_memcmp(string $string1, string $string2): int {}

/**
 * Overwrite a string with NUL characters
 */
function sodium_memzero(string &$string): void {}

/**
 * Add padding data
 */
function sodium_pad(string $string, int $block_size): string {}

/**
 * Remove padding data
 */
function sodium_unpad(string $string, int $block_size): string {}

/**
 * 对数组升序排序
 */
function sort(array &$array, int $flags = SORT_REGULAR): true {}

/**
 * Calculate the soundex key of a string
 */
function soundex(string $string): string {}

/**
 * __autoload() 函数的默认实现
 */
function spl_autoload(string $class, ?string $file_extensions = NULL): void {}

/**
 * 尝试所有已注册的 __autoload() 函数来装载请求类
 */
function spl_autoload_call(string $class): void {}

/**
 * 注册并返回 spl_autoload 的默认文件扩展名
 */
function spl_autoload_extensions(?string $file_extensions = NULL): string {}

/**
 * 返回所有已注册的 __autoload() 函数
 */
function spl_autoload_functions(): array {}

/**
 * 注册指定的函数作为 __autoload 的实现
 */
function spl_autoload_register(?callable $callback = NULL, bool $throw = true, bool $prepend = false): bool {}

/**
 * 注销已实现的 __autoload() 函数
 */
function spl_autoload_unregister(callable $callback): bool {}

/**
 * 返回所有可用的SPL类
 */
function spl_classes(): array {}

/**
 * 返回指定对象的 hash id
 */
function spl_object_hash(object $object): string {}

/**
 * Return the integer object handle for given object
 */
function spl_object_id(object $object): int {}

/**
 * 返回格式化字符串
 */
function sprintf(string $format, mixed ...$values): string {}

/**
 * 平方根
 */
function sqrt(float $num): float {}

/**
 * 播下随机数发生器种子
 */
function srand(?int $seed = NULL, int $mode = MT_RAND_MT19937): void {}

/**
 * 根据指定格式解析输入的字符
 */
function sscanf(string $string, string $format, mixed &...$vars): array|int|null {}

/**
 * 给出文件的信息
 */
function stat(string $filename): array|false {}

/**
 * 确定字符串是否包含指定子串
 */
function str_contains(string $haystack, string $needle): bool {}

/**
 * Decrement an alphanumeric string (PHP 8 >= 8.3.0)
 */
function str_decrement(string $string): string {}

/**
 * 检查字符串是否以指定子串结尾
 */
function str_ends_with(string $haystack, string $needle): bool {}

/**
 * 解析 CSV 字符串为一个数组
 */
function str_getcsv(string $string, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array {}

/**
 * Increment an alphanumeric string (PHP 8 >= 8.3.0)
 */
function str_increment(string $string): string {}

/**
 * str_replace 的忽略大小写版本
 */
function str_ireplace(array|string $search, array|string $replace, array|string $subject, &$count = NULL): array|string {}

/**
 * 使用另一个字符串填充字符串为指定长度
 */
function str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT): string {}

/**
 * 重复一个字符串
 */
function str_repeat(string $string, int $times): string {}

/**
 * 子字符串替换
 */
function str_replace(array|string $search, array|string $replace, array|string $subject, &$count = NULL): array|string {}

/**
 * 对字符串执行 ROT13 转换
 */
function str_rot13(string $string): string {}

/**
 * 随机打乱一个字符串
 */
function str_shuffle(string $string): string {}

/**
 * 将字符串转换为数组
 */
function str_split(string $string, int $length = 1): array {}

/**
 * 检查字符串是否以指定子串开头
 */
function str_starts_with(string $haystack, string $needle): bool {}

/**
 * 返回字符串中单词的使用情况
 */
function str_word_count(string $string, int $format = 0, ?string $characters = NULL): array|int {}

/**
 * 二进制安全比较字符串（不区分大小写）
 */
function strcasecmp(string $string1, string $string2): int {}

/**
 * 别名 strstr
 */
function strchr(string $haystack, string $needle, bool $before_needle = false): string|false {}

/**
 * 二进制安全字符串比较
 */
function strcmp(string $string1, string $string2): int {}

/**
 * 基于区域设置的字符串比较
 */
function strcoll(string $string1, string $string2): int {}

/**
 * 获取不匹配遮罩的起始子字符串的长度
 */
function strcspn(string $string, string $characters, int $offset = 0, ?int $length = NULL): int {}

/**
 * Append bucket to brigade
 */
function stream_bucket_append($brigade, \StreamBucket $bucket): void {}

/**
 * Returns a bucket object from the brigade to operate on
 */
function stream_bucket_make_writeable($brigade): ?\StreamBucket {}

/**
 * Create a new bucket for use on the current stream
 */
function stream_bucket_new($stream, string $buffer): \StreamBucket {}

/**
 * Prepend bucket to brigade
 */
function stream_bucket_prepend($brigade, \StreamBucket $bucket): void {}

/**
 * 创建资源流上下文
 */
function stream_context_create(?array $options = NULL, ?array $params = NULL) {}

/**
 * Retrieve the default stream context
 */
function stream_context_get_default(?array $options = NULL) {}

/**
 * 获取资源流/数据包/上下文的参数
 */
function stream_context_get_options($stream_or_context): array {}

/**
 * Retrieves parameters from a context
 */
function stream_context_get_params($context): array {}

/**
 * Set the default stream context
 */
function stream_context_set_default(array $options) {}

/**
 * 对资源流、数据包或者上下文设置参数
 */
function stream_context_set_option($context, array|string $wrapper_or_options, ?string $option_name = NULL, mixed $value = null): true {}

/**
 * Sets options on the specified context (PHP 8 >= 8.3.0)
 */
function stream_context_set_options($context, array $options): true {}

/**
 * Set parameters for a stream/wrapper/context
 */
function stream_context_set_params($context, array $params): true {}

/**
 * Copies data from one stream to another
 */
function stream_copy_to_stream($from, $to, ?int $length = NULL, int $offset = 0): int|false {}

/**
 * Attach a filter to a stream
 */
function stream_filter_append($stream, string $filter_name, int $mode = 0, mixed $params = null) {}

/**
 * Attach a filter to a stream
 */
function stream_filter_prepend($stream, string $filter_name, int $mode = 0, mixed $params = null) {}

/**
 * Register a user defined stream filter
 */
function stream_filter_register(string $filter_name, string $class): bool {}

/**
 * 从资源流里移除某个过滤器
 */
function stream_filter_remove($stream_filter): bool {}

/**
 * 读取资源流到一个字符串
 */
function stream_get_contents($stream, ?int $length = NULL, int $offset = -1): string|false {}

/**
 * 获取已注册的数据流过滤器列表
 */
function stream_get_filters(): array {}

/**
 * 从资源流里读取一行直到给定的定界符
 */
function stream_get_line($stream, int $length, string $ending = ""): string|false {}

/**
 * 从流或文件指针中获取 header/meta 数据
 */
function stream_get_meta_data($stream): array {}

/**
 * 获取已注册的套接字传输协议列表
 */
function stream_get_transports(): array {}

/**
 * 获取已注册的流类型
 */
function stream_get_wrappers(): array {}

/**
 * Checks if a stream is a local stream
 */
function stream_is_local($stream): bool {}

/**
 * Check if a stream is a TTY
 */
function stream_isatty($stream): bool {}

/**
 * 别名 stream_wrapper_register
 */
function stream_register_wrapper(string $protocol, string $class, int $flags = 0): bool {}

/**
 * Resolve filename against the include path
 */
function stream_resolve_include_path(string $filename): string|false {}

/**
 * Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds
 */
function stream_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, ?int $microseconds = NULL): int|false {}

/**
 * 为资源流设置阻塞或者阻塞模式
 */
function stream_set_blocking($stream, bool $enable): bool {}

/**
 * 设置资源流区块大小
 */
function stream_set_chunk_size($stream, int $size): int {}

/**
 * Set read file buffering on the given stream
 */
function stream_set_read_buffer($stream, int $size): int {}

/**
 * Set timeout period on a stream
 */
function stream_set_timeout($stream, int $seconds, int $microseconds = 0): bool {}

/**
 * Sets write file buffering on the given stream
 */
function stream_set_write_buffer($stream, int $size): int {}

/**
 * 接受由 stream_socket_server 创建的套接字连接
 */
function stream_socket_accept($socket, ?float $timeout = NULL, &$peer_name = NULL) {}

/**
 * Open Internet or Unix domain socket connection
 */
function stream_socket_client(string $address, &$error_code = NULL, &$error_message = NULL, ?float $timeout = NULL, int $flags = STREAM_CLIENT_CONNECT, $context = NULL) {}

/**
 * Turns encryption on/off on an already connected socket
 */
function stream_socket_enable_crypto($stream, bool $enable, ?int $crypto_method = NULL, $session_stream = NULL): int|bool {}

/**
 * 获取本地或者远程的套接字名称
 */
function stream_socket_get_name($socket, bool $remote): string|false {}

/**
 * 创建一对完全一样的网络套接字连接流
 */
function stream_socket_pair(int $domain, int $type, int $protocol): array|false {}

/**
 * Receives data from a socket, connected or not
 */
function stream_socket_recvfrom($socket, int $length, int $flags = 0, &$address = NULL): string|false {}

/**
 * Sends a message to a socket, whether it is connected or not
 */
function stream_socket_sendto($socket, string $data, int $flags = 0, string $address = ""): int|false {}

/**
 * 创建 Internet 或 Unix 域服务器套接字
 */
function stream_socket_server(string $address, &$error_code = NULL, &$error_message = NULL, int $flags = 12, $context = NULL) {}

/**
 * Shutdown a full-duplex connection
 */
function stream_socket_shutdown($stream, int $mode): bool {}

/**
 * Tells whether the stream supports locking
 */
function stream_supports_lock($stream): bool {}

/**
 * 注册一个用 PHP 类实现的 URL 封装协议
 */
function stream_wrapper_register(string $protocol, string $class, int $flags = 0): bool {}

/**
 * Restores a previously unregistered built-in wrapper
 */
function stream_wrapper_restore(string $protocol): bool {}

/**
 * Unregister a URL wrapper
 */
function stream_wrapper_unregister(string $protocol): bool {}

/**
 * 根据区域设置格式化本地时间/日期
 */
function strftime(string $format, ?int $timestamp = NULL): string|false {}

/**
 * 从字符串中去除 HTML 和 PHP 标签
 */
function strip_tags(string $string, array|string|null $allowed_tags = NULL): string {}

/**
 * 反引用一个使用 addcslashes 转义的字符串
 */
function stripcslashes(string $string): string {}

/**
 * 查找字符串首次出现的位置（不区分大小写）
 */
function stripos(string $haystack, string $needle, int $offset = 0): int|false {}

/**
 * 反引用一个引用字符串
 */
function stripslashes(string $string): string {}

/**
 * strstr 函数的忽略大小写版本
 */
function stristr(string $haystack, string $needle, bool $before_needle = false): string|false {}

/**
 * 获取字符串长度
 */
function strlen(string $string): int {}

/**
 * 使用&ldquo;自然顺序&rdquo;算法比较字符串（不区分大小写）
 */
function strnatcasecmp(string $string1, string $string2): int {}

/**
 * 使用自然排序算法比较字符串
 */
function strnatcmp(string $string1, string $string2): int {}

/**
 * 二进制安全比较字符串开头的若干个字符（不区分大小写）
 */
function strncasecmp(string $string1, string $string2, int $length): int {}

/**
 * 二进制安全比较字符串开头的若干个字符
 */
function strncmp(string $string1, string $string2, int $length): int {}

/**
 * 在字符串中查找一组字符的任何一个字符
 */
function strpbrk(string $string, string $characters): string|false {}

/**
 * 查找字符串首次出现的位置
 */
function strpos(string $haystack, string $needle, int $offset = 0): int|false {}

/**
 * 查找指定字符在字符串中的最后一次出现
 */
function strrchr(string $haystack, string $needle, bool $before_needle = false): string|false {}

/**
 * 反转字符串
 */
function strrev(string $string): string {}

/**
 * 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）
 */
function strripos(string $haystack, string $needle, int $offset = 0): int|false {}

/**
 * 计算指定字符串在目标字符串中最后一次出现的位置
 */
function strrpos(string $haystack, string $needle, int $offset = 0): int|false {}

/**
 * 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度
 */
function strspn(string $string, string $characters, int $offset = 0, ?int $length = NULL): int {}

/**
 * 查找字符串的首次出现
 */
function strstr(string $haystack, string $needle, bool $before_needle = false): string|false {}

/**
 * 标记分割字符串
 */
function strtok(string $string, ?string $token = NULL): string|false {}

/**
 * 将字符串转化为小写
 */
function strtolower(string $string): string {}

/**
 * 将任何英文文本日期时间描述解析为 Unix 时间戳
 */
function strtotime(string $datetime, ?int $baseTimestamp = NULL): int|false {}

/**
 * 将字符串转化为大写
 */
function strtoupper(string $string): string {}

/**
 * 转换字符或替换字串
 */
function strtr(string $string, array|string $from, ?string $to = NULL): string {}

/**
 * 获取变量的字符串值
 */
function strval(mixed $value): string {}

/**
 * 返回字符串的子串
 */
function substr(string $string, int $offset, ?int $length = NULL): string {}

/**
 * 二进制安全比较字符串（从偏移位置比较指定长度）
 */
function substr_compare(string $haystack, string $needle, int $offset, ?int $length = NULL, bool $case_insensitive = false): int {}

/**
 * 计算字串出现的次数
 */
function substr_count(string $haystack, string $needle, int $offset = 0, ?int $length = NULL): int {}

/**
 * 替换字符串的子串
 */
function substr_replace(array|string $string, array|string $replace, array|int $offset, array|int|null $length = NULL): array|string {}

/**
 * 建立符号连接
 */
function symlink(string $target, string $link): bool {}

/**
 * 返回用于临时文件的目录
 */
function sys_get_temp_dir(): string {}

/**
 * Generate a system log message
 */
function syslog(int $priority, string $message): true {}

/**
 * 执行外部程序，并且显示输出
 */
function system(string $command, &$result_code = NULL): string|false {}

/**
 * 正切
 */
function tan(float $num): float {}

/**
 * 双曲正切
 */
function tanh(float $num): float {}

/**
 * 建立一个具有唯一文件名的文件
 */
function tempnam(string $directory, string $prefix): string|false {}

/**
 * Sets the default domain
 */
function textdomain(?string $domain = NULL): string {}

/**
 * Returns the Number of Tidy accessibility warnings encountered for specified document
 */
function tidy_access_count(\tidy $tidy): int {}

function tidy_clean_repair(\tidy $tidy): bool {}

/**
 * Returns the Number of Tidy configuration errors encountered for specified document
 */
function tidy_config_count(\tidy $tidy): int {}

function tidy_diagnose(\tidy $tidy): bool {}

/**
 * Returns the Number of Tidy errors encountered for specified document
 */
function tidy_error_count(\tidy $tidy): int {}

function tidy_get_body(\tidy $tidy): ?\tidyNode {}

function tidy_get_config(\tidy $tidy): array {}

function tidy_get_error_buffer(\tidy $tidy): string|false {}

function tidy_get_head(\tidy $tidy): ?\tidyNode {}

function tidy_get_html(\tidy $tidy): ?\tidyNode {}

function tidy_get_html_ver(\tidy $tidy): int {}

function tidy_get_opt_doc(\tidy $tidy, string $option): string|false {}

/**
 * Return a string representing the parsed tidy markup
 */
function tidy_get_output(\tidy $tidy): string {}

function tidy_get_release(): string {}

function tidy_get_root(\tidy $tidy): ?\tidyNode {}

function tidy_get_status(\tidy $tidy): int {}

function tidy_getopt(\tidy $tidy, string $option): string|int|bool {}

function tidy_is_xhtml(\tidy $tidy): bool {}

function tidy_is_xml(\tidy $tidy): bool {}

function tidy_parse_file(string $filename, array|string|null $config = NULL, ?string $encoding = NULL, bool $useIncludePath = false): \tidy|false {}

function tidy_parse_string(string $string, array|string|null $config = NULL, ?string $encoding = NULL): \tidy|false {}

function tidy_repair_file(string $filename, array|string|null $config = NULL, ?string $encoding = NULL, bool $useIncludePath = false): string|false {}

function tidy_repair_string(string $string, array|string|null $config = NULL, ?string $encoding = NULL): string|false {}

/**
 * Returns the Number of Tidy warnings encountered for specified document
 */
function tidy_warning_count(\tidy $tidy): int {}

/**
 * 返回当前的 Unix 时间戳
 */
function time(): int {}

/**
 * 延缓执行若干秒和纳秒
 */
function time_nanosleep(int $seconds, int $nanoseconds): array|bool {}

/**
 * 使脚本睡眠到指定的时间为止
 */
function time_sleep_until(float $timestamp): bool {}

/**
 * 别名 DateTimeZone::listAbbreviations
 */
function timezone_abbreviations_list(): array {}

/**
 * 别名 DateTimeZone::listIdentifiers
 */
function timezone_identifiers_list(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = NULL): array {}

/**
 * 别名 DateTimeZone::getLocation
 */
function timezone_location_get(\DateTimeZone $object): array|false {}

/**
 * Returns a timezone name by guessing from abbreviation and UTC offset
 */
function timezone_name_from_abbr(string $abbr, int $utcOffset = -1, int $isDST = -1): string|false {}

/**
 * 别名 DateTimeZone::getName
 */
function timezone_name_get(\DateTimeZone $object): string {}

/**
 * 别名 DateTimeZone::getOffset
 */
function timezone_offset_get(\DateTimeZone $object, \DateTimeInterface $datetime): int {}

/**
 * 别名 DateTimeZone::__construct
 */
function timezone_open(string $timezone): \DateTimeZone|false {}

/**
 * 别名 DateTimeZone::getTransitions
 */
function timezone_transitions_get(\DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = 2147483647): array|false {}

/**
 * 获取 timezonedb 版本
 */
function timezone_version_get(): string {}

/**
 * 建立一个临时文件
 */
function tmpfile() {}

/**
 * 将提供的源码按 PHP 标记进行分割
 */
function token_get_all(string $code, int $flags = 0): array {}

/**
 * 获取提供的 PHP 解析器代号的符号名称
 */
function token_name(int $id): string {}

/**
 * 设定文件的访问和修改时间
 */
function touch(string $filename, ?int $mtime = NULL, ?int $atime = NULL): bool {}

/**
 * 检查指定的 trait 是否存在
 */
function trait_exists(string $trait, bool $autoload = true): bool {}

function transliterator_create(string $id, int $direction = Transliterator::FORWARD): ?\Transliterator {}

function transliterator_create_from_rules(string $rules, int $direction = Transliterator::FORWARD): ?\Transliterator {}

function transliterator_create_inverse(\Transliterator $transliterator): ?\Transliterator {}

function transliterator_get_error_code(\Transliterator $transliterator): int {}

function transliterator_get_error_message(\Transliterator $transliterator): string {}

function transliterator_list_ids(): array|false {}

function transliterator_transliterate(\Transliterator|string $transliterator, string $string, int $start = 0, int $end = -1): string|false {}

/**
 * 产生一个用户级别的 error/warning/notice 信息
 */
function trigger_error(string $message, int $error_level = E_USER_NOTICE): true {}

/**
 * 去除字符串首尾处的空白字符（或者其他字符）
 */
function trim(string $string, string $characters = " \n\r\t\v\x00"): string {}

/**
 * 使用用户定义的比较函数对数组进行排序并保持索引关联
 */
function uasort(array &$array, callable $callback): true {}

/**
 * 将字符串的首字母转换为大写
 */
function ucfirst(string $string): string {}

/**
 * 将字符串中每个单词的首字母转换为大写
 */
function ucwords(string $string, string $separators = " \t\r\n\v"): string {}

/**
 * 使用用户自定义的比较函数对数组中的键名进行排序
 */
function uksort(array &$array, callable $callback): true {}

/**
 * 改变当前的 umask
 */
function umask(?int $mask = NULL): int {}

/**
 * 生成基于时间的标识符
 */
function uniqid(string $prefix = "", bool $more_entropy = false): string {}

/**
 * 将 Unix 时间戳转换为儒略日数
 */
function unixtojd(?int $timestamp = NULL): int|false {}

/**
 * 删除文件
 */
function unlink(string $filename, $context = NULL): bool {}

/**
 * Unpack data from binary string
 */
function unpack(string $format, string $string, int $offset = 0): array|false {}

/**
 * 注销每个 tick 上需要执行的函数
 */
function unregister_tick_function(callable $callback): void {}

/**
 * 从已存储的表示中创建 PHP 的值
 */
function unserialize(string $data, array $options = []): mixed {}

/**
 * 解码已编码的 URL 字符串
 */
function urldecode(string $string): string {}

/**
 * 编码 URL 字符串
 */
function urlencode(string $string): string {}

/**
 * Set whether to use the SOAP error handler
 */
function use_soap_error_handler(bool $enable = true): bool {}

/**
 * 别名 trigger_error
 */
function user_error(string $message, int $error_level = E_USER_NOTICE): true {}

/**
 * 以指定的微秒数延迟执行
 */
function usleep(int $microseconds): void {}

/**
 * 使用用户自定义的比较函数对数组中的值进行排序
 */
function usort(array &$array, callable $callback): true {}

/**
 * 将字符串从 UTF-8 转换为 ISO-8859-1，替换无效或者无法表示的字符。
 */
function utf8_decode(string $string): string {}

/**
 * 将字符串从 ISO-8859-1 转换为 UTF-8 编码
 */
function utf8_encode(string $string): string {}

/**
 * 打印变量的相关信息
 */
function var_dump(mixed $value, mixed ...$values): void {}

/**
 * 输出或返回变量的可解析字符串表示
 */
function var_export(mixed $value, bool $return = false): ?string {}

/**
 * 对比两个「PHP 规范化」的版本数字字符串
 */
function version_compare(string $version1, string $version2, ?string $operator = NULL): int|bool {}

/**
 * 将格式化字符串写入流
 */
function vfprintf($stream, string $format, array $values): int {}

/**
 * 输出格式化字符串
 */
function vprintf(string $format, array $values): int {}

/**
 * 返回格式化字符串
 */
function vsprintf(string $format, array $values): string {}

/**
 * 打断字符串为指定数量的字串
 */
function wordwrap(string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false): string {}

/**
 * 获取 XML 解析器的错误字符串
 */
function xml_error_string(int $error_code): ?string {}

/**
 * 获取 XML 解析器的当前字节索引
 */
function xml_get_current_byte_index(\XMLParser $parser): int {}

/**
 * 获取 XML 解析器的当前列号
 */
function xml_get_current_column_number(\XMLParser $parser): int {}

/**
 * 获取 XML 解析器的当前行号
 */
function xml_get_current_line_number(\XMLParser $parser): int {}

/**
 * 获取 XML 解析器错误代码
 */
function xml_get_error_code(\XMLParser $parser): int {}

/**
 * 开始解析 XML 文档
 */
function xml_parse(\XMLParser $parser, string $data, bool $is_final = false): int {}

/**
 * 解析 XML 数据到数组中
 */
function xml_parse_into_struct(\XMLParser $parser, string $data, &$values, &$index = NULL): int|false {}

/**
 * 创建 XML 解析器
 */
function xml_parser_create(?string $encoding = NULL): \XMLParser {}

/**
 * 创建支持命名空间的 XML 解析器
 */
function xml_parser_create_ns(?string $encoding = NULL, string $separator = ":"): \XMLParser {}

/**
 * 释放 XML 解析器
 */
function xml_parser_free(\XMLParser $parser): bool {}

/**
 * 从 XML 解析器获取选项
 */
function xml_parser_get_option(\XMLParser $parser, int $option): string|int|bool {}

/**
 * 在 XML 解析器中设置选项
 */
function xml_parser_set_option(\XMLParser $parser, int $option, $value): bool {}

/**
 * 建立字符数据处理器
 */
function xml_set_character_data_handler(\XMLParser $parser, callable|string|null $handler): true {}

/**
 * 建立默认处理程序
 */
function xml_set_default_handler(\XMLParser $parser, callable|string|null $handler): true {}

/**
 * 建立起始和终止元素处理程序
 */
function xml_set_element_handler(\XMLParser $parser, callable|string|null $start_handler, callable|string|null $end_handler): true {}

/**
 * 设置终止命名空间声明处理程序
 */
function xml_set_end_namespace_decl_handler(\XMLParser $parser, callable|string|null $handler): true {}

/**
 * 设置外部实体引用处理程序
 */
function xml_set_external_entity_ref_handler(\XMLParser $parser, callable|string|null $handler): true {}

/**
 * 设置符号声明处理程序
 */
function xml_set_notation_decl_handler(\XMLParser $parser, callable|string|null $handler): true {}

/**
 * 在对象中使用 XML 解析器
 */
function xml_set_object(\XMLParser $parser, object $object): true {}

/**
 * 建立处理指令（PI）处理程序
 */
function xml_set_processing_instruction_handler(\XMLParser $parser, callable|string|null $handler): true {}

/**
 * 设置起始命名空间声明处理程序
 */
function xml_set_start_namespace_decl_handler(\XMLParser $parser, callable|string|null $handler): true {}

/**
 * 建立未解析实体定义声明处理程序
 */
function xml_set_unparsed_entity_decl_handler(\XMLParser $parser, callable|string|null $handler): true {}

function xmlwriter_end_attribute(\XMLWriter $writer): bool {}

function xmlwriter_end_cdata(\XMLWriter $writer): bool {}

function xmlwriter_end_comment(\XMLWriter $writer): bool {}

function xmlwriter_end_document(\XMLWriter $writer): bool {}

function xmlwriter_end_dtd(\XMLWriter $writer): bool {}

function xmlwriter_end_dtd_attlist(\XMLWriter $writer): bool {}

function xmlwriter_end_dtd_element(\XMLWriter $writer): bool {}

function xmlwriter_end_dtd_entity(\XMLWriter $writer): bool {}

function xmlwriter_end_element(\XMLWriter $writer): bool {}

function xmlwriter_end_pi(\XMLWriter $writer): bool {}

function xmlwriter_flush(\XMLWriter $writer, bool $empty = true): string|int {}

function xmlwriter_full_end_element(\XMLWriter $writer): bool {}

function xmlwriter_open_memory(): \XMLWriter|false {}

function xmlwriter_open_uri(string $uri): \XMLWriter|false {}

function xmlwriter_output_memory(\XMLWriter $writer, bool $flush = true): string {}

function xmlwriter_set_indent(\XMLWriter $writer, bool $enable): bool {}

function xmlwriter_set_indent_string(\XMLWriter $writer, string $indentation): bool {}

function xmlwriter_start_attribute(\XMLWriter $writer, string $name): bool {}

function xmlwriter_start_attribute_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace): bool {}

function xmlwriter_start_cdata(\XMLWriter $writer): bool {}

function xmlwriter_start_comment(\XMLWriter $writer): bool {}

function xmlwriter_start_document(\XMLWriter $writer, ?string $version = "1.0", ?string $encoding = NULL, ?string $standalone = NULL): bool {}

function xmlwriter_start_dtd(\XMLWriter $writer, string $qualifiedName, ?string $publicId = NULL, ?string $systemId = NULL): bool {}

function xmlwriter_start_dtd_attlist(\XMLWriter $writer, string $name): bool {}

function xmlwriter_start_dtd_element(\XMLWriter $writer, string $qualifiedName): bool {}

function xmlwriter_start_dtd_entity(\XMLWriter $writer, string $name, bool $isParam): bool {}

function xmlwriter_start_element(\XMLWriter $writer, string $name): bool {}

function xmlwriter_start_element_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace): bool {}

function xmlwriter_start_pi(\XMLWriter $writer, string $target): bool {}

function xmlwriter_text(\XMLWriter $writer, string $content): bool {}

function xmlwriter_write_attribute(\XMLWriter $writer, string $name, string $value): bool {}

function xmlwriter_write_attribute_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace, string $value): bool {}

function xmlwriter_write_cdata(\XMLWriter $writer, string $content): bool {}

function xmlwriter_write_comment(\XMLWriter $writer, string $content): bool {}

function xmlwriter_write_dtd(\XMLWriter $writer, string $name, ?string $publicId = NULL, ?string $systemId = NULL, ?string $content = NULL): bool {}

function xmlwriter_write_dtd_attlist(\XMLWriter $writer, string $name, string $content): bool {}

function xmlwriter_write_dtd_element(\XMLWriter $writer, string $name, string $content): bool {}

function xmlwriter_write_dtd_entity(\XMLWriter $writer, string $name, string $content, bool $isParam = false, ?string $publicId = NULL, ?string $systemId = NULL, ?string $notationData = NULL): bool {}

function xmlwriter_write_element(\XMLWriter $writer, string $name, ?string $content = NULL): bool {}

function xmlwriter_write_element_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace, ?string $content = NULL): bool {}

function xmlwriter_write_pi(\XMLWriter $writer, string $target, string $content): bool {}

function xmlwriter_write_raw(\XMLWriter $writer, string $content): bool {}

/**
 * 获取当前 Zend 引擎的版本
 */
function zend_version(): string {}

/**
 * 关闭一个ZIP档案文件
 */
function zip_close($zip): void {}

/**
 * 关闭目录项
 */
function zip_entry_close($zip_entry): bool {}

/**
 * 检索目录项压缩过后的大小
 */
function zip_entry_compressedsize($zip_entry): int|false {}

/**
 * 检索目录实体的压缩方法
 */
function zip_entry_compressionmethod($zip_entry): string|false {}

/**
 * 检索目录实体的实际大小
 */
function zip_entry_filesize($zip_entry): int|false {}

/**
 * 检索目录项的名称
 */
function zip_entry_name($zip_entry): string|false {}

/**
 * 打开用于读取的目录实体
 */
function zip_entry_open($zip_dp, $zip_entry, string $mode = "rb"): bool {}

/**
 * 读取一个打开了的压缩目录实体
 */
function zip_entry_read($zip_entry, int $len = 1024): string|false {}

/**
 * 打开 ZIP 文件归档
 */
function zip_open(string $filename) {}

/**
 * 读取 ZIP 文件归档中下一项
 */
function zip_read($zip) {}

/**
 * Uncompress any raw/gzip/zlib encoded data
 */
function zlib_decode(string $data, int $max_length = 0): string|false {}

/**
 * Compress data with the specified encoding
 */
function zlib_encode(string $data, int $encoding, int $level = -1): string|false {}

/**
 * Returns the coding type used for output compression
 */
function zlib_get_coding_type(): string|false {}

/**
 * AddressInfo 类
 */
 final class AddressInfo {
}

/**
 * AllowDynamicProperties 注解 (PHP 8 >= 8.2.0)
 */
 final class AllowDynamicProperties {
    /**
     * 构造新的 AllowDynamicProperties 注解实例 (PHP 8 >= 8.2.0)
     */
     public function __construct() {}
}

/**
 * AppendIterator 类
 */
 class AppendIterator extends \IteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    /**
     * Constructs an AppendIterator
     */
     public function __construct() {}
    /**
     * Appends an iterator
     */
     public function append(\Iterator $iterator): void {}
    /**
     * Gets the current value
     */
     public function current(): mixed {}
    /**
     * Gets the ArrayIterator
     */
     public function getArrayIterator(): \ArrayIterator {}
    /**
     * Gets an index of iterators
     */
     public function getIteratorIndex(): ?int {}
    /**
     * Moves to the next element
     */
     public function next(): void {}
    /**
     * Rewinds the Iterator
     */
     public function rewind(): void {}
    /**
     * Checks validity of the current element
     */
     public function valid(): bool {}
}

/**
 * ArgumentCountError
 */
 class ArgumentCountError extends \TypeError implements \Stringable, \Throwable {
}

/**
 * ArithmeticError
 */
 class ArithmeticError extends \Error implements \Stringable, \Throwable {
}

/**
 * ArrayAccess（数组式访问）接口
 */
 interface ArrayAccess {
    /**
     * 检查一个偏移位置是否存在
     */
     public abstract function offsetExists(mixed $offset): bool;
    /**
     * 获取一个偏移位置的值
     */
     public abstract function offsetGet(mixed $offset): mixed;
    /**
     * 设置一个偏移位置的值
     */
     public abstract function offsetSet(mixed $offset, mixed $value): void;
    /**
     * 复位一个偏移位置的值
     */
     public abstract function offsetUnset(mixed $offset): void;
}

/**
 * ArrayIterator 类
 */
 class ArrayIterator implements \ArrayAccess, \Countable, \Iterator, \SeekableIterator, \Serializable, \Traversable {
    public const ARRAY_AS_PROPS = 2;
    public const STD_PROP_LIST = 1;
    /**
     * Construct an ArrayIterator
     */
     public function __construct(object|array $array = [], int $flags = 0) {}
    public function __debugInfo(): array {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
    /**
     * Append an element
     */
     public function append(mixed $value): void {}
    /**
     * Sort entries by values
     */
     public function asort(int $flags = SORT_REGULAR): true {}
    /**
     * Count elements
     */
     public function count(): int {}
    /**
     * Return current array entry
     */
     public function current(): mixed {}
    /**
     * Get array copy
     */
     public function getArrayCopy(): array {}
    /**
     * Get behavior flags
     */
     public function getFlags(): int {}
    /**
     * Return current array key
     */
     public function key(): string|int|null {}
    /**
     * Sort entries by keys
     */
     public function ksort(int $flags = SORT_REGULAR): true {}
    /**
     * Sort entries naturally, case insensitive
     */
     public function natcasesort(): true {}
    /**
     * Sort entries naturally
     */
     public function natsort(): true {}
    /**
     * Move to next entry
     */
     public function next(): void {}
    /**
     * Check if offset exists
     */
     public function offsetExists(mixed $key): bool {}
    /**
     * Get value for an offset
     */
     public function offsetGet(mixed $key): mixed {}
    /**
     * Set value for an offset
     */
     public function offsetSet(mixed $key, mixed $value): void {}
    /**
     * Unset value for an offset
     */
     public function offsetUnset(mixed $key): void {}
    /**
     * Rewind array back to the start
     */
     public function rewind(): void {}
    /**
     * Seeks to a position
     */
     public function seek(int $offset): void {}
    /**
     * Serialize
     */
     public function serialize(): string {}
    /**
     * Set behaviour flags
     */
     public function setFlags(int $flags): void {}
    /**
     * Sort with a user-defined comparison function and maintain index association
     */
     public function uasort(callable $callback): true {}
    /**
     * Sort by keys using a user-defined comparison function
     */
     public function uksort(callable $callback): true {}
    /**
     * Unserialize
     */
     public function unserialize(string $data): void {}
    /**
     * Check whether array contains more entries
     */
     public function valid(): bool {}
}

/**
 * The ArrayObject class
 */
 class ArrayObject implements \ArrayAccess, \Countable, \IteratorAggregate, \Serializable, \Traversable {
    public const ARRAY_AS_PROPS = 2;
    public const STD_PROP_LIST = 1;
    /**
     * Construct a new array object
     */
     public function __construct(object|array $array = [], int $flags = 0, string $iteratorClass = "ArrayIterator") {}
    public function __debugInfo(): array {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
    /**
     * 追加新的值作为最后一个元素。
     */
     public function append(mixed $value): void {}
    /**
     * Sort the entries by value
     */
     public function asort(int $flags = SORT_REGULAR): true {}
    /**
     * 统计 ArrayObject 内 public 属性的数量
     */
     public function count(): int {}
    /**
     * Exchange the array for another one
     */
     public function exchangeArray(object|array $array): array {}
    /**
     * Creates a copy of the ArrayObject
     */
     public function getArrayCopy(): array {}
    /**
     * Gets the behavior flags
     */
     public function getFlags(): int {}
    /**
     * Create a new iterator from an ArrayObject instance
     */
     public function getIterator(): \Iterator {}
    /**
     * Gets the iterator classname for the ArrayObject
     */
     public function getIteratorClass(): string {}
    /**
     * Sort the entries by key
     */
     public function ksort(int $flags = SORT_REGULAR): true {}
    /**
     * Sort an array using a case insensitive &quot;natural order&quot; algorithm
     */
     public function natcasesort(): true {}
    /**
     * Sort entries using a &quot;natural order&quot; algorithm
     */
     public function natsort(): true {}
    /**
     * Returns whether the requested index exists
     */
     public function offsetExists(mixed $key): bool {}
    /**
     * Returns the value at the specified index
     */
     public function offsetGet(mixed $key): mixed {}
    /**
     * 为指定索引设定新值
     */
     public function offsetSet(mixed $key, mixed $value): void {}
    /**
     * Unsets the value at the specified index
     */
     public function offsetUnset(mixed $key): void {}
    /**
     * Serialize an ArrayObject
     */
     public function serialize(): string {}
    /**
     * Sets the behavior flags
     */
     public function setFlags(int $flags): void {}
    /**
     * Sets the iterator classname for the ArrayObject
     */
     public function setIteratorClass(string $iteratorClass): void {}
    /**
     * Sort the entries with a user-defined comparison function and maintain key association
     */
     public function uasort(callable $callback): true {}
    /**
     * Sort the entries by keys using a user-defined comparison function
     */
     public function uksort(callable $callback): true {}
    /**
     * Unserialize an ArrayObject
     */
     public function unserialize(string $data): void {}
}

/**
 * AssertionError
 */
 class AssertionError extends \Error implements \Stringable, \Throwable {
}

/**
 * Attribute 属性
 */
 final class Attribute {
    public const IS_REPEATABLE = 128;
    public const TARGET_ALL = 127;
    public const TARGET_CLASS = 1;
    public const TARGET_CLASS_CONSTANT = 16;
    public const TARGET_CONSTANT = 64;
    public const TARGET_FUNCTION = 2;
    public const TARGET_METHOD = 4;
    public const TARGET_PARAMETER = 32;
    public const TARGET_PROPERTY = 8;
    public int $flags;
    /**
     * 构造新的 Attribute 实例
     */
     public function __construct(int $flags = Attribute::TARGET_ALL) {}
}

/**
 * BackedEnum 接口 (PHP 8 >= 8.1.0)
 */
 interface BackedEnum extends \UnitEnum {
    /**
     * 映射标量为 enum 实例 (PHP 8 >= 8.1.0)
     */
     public abstract static function from(string|int $value): static;
    /**
     * 映射标量为 enum 实例或 null (PHP 8 >= 8.1.0)
     */
     public abstract static function tryFrom(string|int $value): ?static;
}

/**
 * The BadFunctionCallException class
 */
 class BadFunctionCallException extends \LogicException implements \Stringable, \Throwable {
}

/**
 * BadMethodCallException 类
 */
 class BadMethodCallException extends \BadFunctionCallException implements \Stringable, \Throwable {
}

/**
 * CURLFile 类
 */
 class CURLFile {
    public string $mime;
    public string $name;
    public string $postname;
    /**
     * 创建 CURLFile 对象
     */
     public function __construct(string $filename, ?string $mime_type = NULL, ?string $posted_filename = NULL) {}
    /**
     * 获取文件名
     */
     public function getFilename(): string {}
    /**
     * 获取 MIME 类型
     */
     public function getMimeType(): string {}
    /**
     * 获取 POST 请求时的文件名
     */
     public function getPostFilename(): string {}
    /**
     * 设置 MIME 类型
     */
     public function setMimeType(string $mime_type): void {}
    /**
     * 设置 POST 请求时的文件名
     */
     public function setPostFilename(string $posted_filename): void {}
}

/**
 * CURLStringFile 类 (PHP 8 >= 8.1.0)
 */
 class CURLStringFile {
    public string $data;
    public string $mime;
    public string $postname;
    /**
     * 创建 CURLStringFile 对象 (PHP 8 >= 8.1.0)
     */
     public function __construct(string $data, string $postname, string $mime = "application/octet-stream") {}
}

/**
 * CachingIterator 类
 */
 class CachingIterator extends \IteratorIterator implements \ArrayAccess, \Countable, \Iterator, \OuterIterator, \Stringable, \Traversable {
    public const CALL_TOSTRING = 1;
    public const CATCH_GET_CHILD = 16;
    public const FULL_CACHE = 256;
    public const TOSTRING_USE_CURRENT = 4;
    public const TOSTRING_USE_INNER = 8;
    public const TOSTRING_USE_KEY = 2;
    /**
     * Construct a new CachingIterator object for the iterator
     */
     public function __construct(\Iterator $iterator, int $flags = CachingIterator::CALL_TOSTRING) {}
    public function __toString(): string {}
    /**
     * The number of elements in the iterator
     */
     public function count(): int {}
    /**
     * Retrieve the contents of the cache
     */
     public function getCache(): array {}
    /**
     * Get flags used
     */
     public function getFlags(): int {}
    /**
     * Check whether the inner iterator has a valid next element
     */
     public function hasNext(): bool {}
    /**
     * Move the iterator forward
     */
     public function next(): void {}
    /**
     * The offsetExists purpose
     */
     public function offsetExists($key): bool {}
    /**
     * The offsetGet purpose
     */
     public function offsetGet($key): mixed {}
    /**
     * The offsetSet purpose
     */
     public function offsetSet($key, mixed $value): void {}
    /**
     * The offsetUnset purpose
     */
     public function offsetUnset($key): void {}
    /**
     * Rewind the iterator
     */
     public function rewind(): void {}
    /**
     * The setFlags purpose
     */
     public function setFlags(int $flags): void {}
    /**
     * Check whether the current element is valid
     */
     public function valid(): bool {}
}

/**
 * The CallbackFilterIterator class
 */
 class CallbackFilterIterator extends \FilterIterator implements \Iterator, \OuterIterator, \Traversable {
    /**
     * Create a filtered iterator from another iterator
     */
     public function __construct(\Iterator $iterator, callable $callback) {}
    /**
     * Calls the callback with the current value, the current key and the inner iterator as arguments
     */
     public function accept(): bool {}
}

/**
 * ClosedGeneratorException 类
 */
 class ClosedGeneratorException extends \Exception implements \Stringable, \Throwable {
}

/**
 * Closure 类
 */
 final class Closure {
    /**
     * 用于禁止实例化的构造函数
     */
     private function __construct() {}
    public function __invoke() {}
    /**
     * 用特定的绑定对象和类作用域复制闭包。
     */
     public static function bind(\Closure $closure, ?object $newThis, object|string|null $newScope = "static"): ?\Closure {}
    /**
     * 用特定的绑定对象和类作用域复制闭包。
     */
     public function bindTo(?object $newThis, object|string|null $newScope = "static"): ?\Closure {}
    /**
     * 绑定并调用闭包
     */
     public function call(object $newThis, mixed ...$args): mixed {}
    /**
     * 将 callable 转换为闭包
     */
     public static function fromCallable(callable $callback): \Closure {}
    /**
     * 返回当前正在执行的闭包 (PHP 8 >= 8.5.0)
     */
     public static function getCurrent(): \Closure {}
}

/**
 * The Collator class
 */
 class Collator {
    public const ALTERNATE_HANDLING = 1;
    public const CASE_FIRST = 2;
    public const CASE_LEVEL = 3;
    public const DEFAULT_STRENGTH = 2;
    public const DEFAULT_VALUE = -1;
    public const FRENCH_COLLATION = 0;
    public const HIRAGANA_QUATERNARY_MODE = 6;
    public const IDENTICAL = 15;
    public const LOWER_FIRST = 24;
    public const NON_IGNORABLE = 21;
    public const NORMALIZATION_MODE = 4;
    public const NUMERIC_COLLATION = 7;
    public const OFF = 16;
    public const ON = 17;
    public const PRIMARY = 0;
    public const QUATERNARY = 3;
    public const SECONDARY = 1;
    public const SHIFTED = 20;
    public const SORT_NUMERIC = 2;
    public const SORT_REGULAR = 0;
    public const SORT_STRING = 1;
    public const STRENGTH = 5;
    public const TERTIARY = 2;
    public const UPPER_FIRST = 25;
    /**
     * Create a collator
     */
     public function __construct(string $locale) {}
    /**
     * Sort array maintaining index association
     */
     public function asort(array &$array, int $flags = Collator::SORT_REGULAR): bool {}
    /**
     * Compare two Unicode strings
     */
     public function compare(string $string1, string $string2): int|false {}
    /**
     * Create a collator
     */
     public static function create(string $locale): ?\Collator {}
    /**
     * Get collation attribute value
     */
     public function getAttribute(int $attribute): int|false {}
    /**
     * Get collator's last error code
     */
     public function getErrorCode(): int|false {}
    /**
     * Get text for collator's last error code
     */
     public function getErrorMessage(): string|false {}
    /**
     * Get the locale name of the collator
     */
     public function getLocale(int $type): string|false {}
    /**
     * Get sorting key for a string
     */
     public function getSortKey(string $string): string|false {}
    /**
     * Get current collation strength
     */
     public function getStrength(): int {}
    /**
     * Set collation attribute
     */
     public function setAttribute(int $attribute, int $value): bool {}
    /**
     * Set collation strength
     */
     public function setStrength(int $strength): true {}
    /**
     * Sort array using specified collator
     */
     public function sort(array &$array, int $flags = Collator::SORT_REGULAR): bool {}
    /**
     * Sort array using specified collator and sort keys
     */
     public function sortWithSortKeys(array &$array): bool {}
}

/**
 * CompileError
 */
 class CompileError extends \Error implements \Stringable, \Throwable {
}

/**
 * Countable 接口
 */
 interface Countable {
    /**
     * 统计对象的元素个数
     */
     public abstract function count(): int;
}

/**
 * CurlHandle 类
 */
 final class CurlHandle {
}

/**
 * CurlMultiHandle 类
 */
 final class CurlMultiHandle {
}

/**
 * CurlShareHandle 类
 */
 final class CurlShareHandle {
}

/**
 * CurlSharePersistentHandle 类 (PHP 8 >= 8.5.0)
 */
 final class CurlSharePersistentHandle {
    public readonly array $options;
}

/**
 * The DOMAttr class
 */
 class DOMAttr extends \DOMNode {
    public string $name;
    public ?\DOMElement $ownerElement;
    public mixed $schemaTypeInfo;
    public bool $specified;
    public string $value;
    /**
     * Creates a new DOMAttr object
     */
     public function __construct(string $name, string $value = "") {}
    /**
     * Checks if attribute is a defined ID
     */
     public function isId(): bool {}
}

/**
 * The DOMCdataSection class
 */
 class DOMCdataSection extends \DOMText implements \DOMChildNode {
    /**
     * Constructs a new DOMCdataSection object
     */
     public function __construct(string $data) {}
}

/**
 * The DOMCharacterData class
 */
 class DOMCharacterData extends \DOMNode implements \DOMChildNode {
    public string $data;
    public int $length;
    public ?\DOMElement $nextElementSibling;
    public ?\DOMElement $previousElementSibling;
    /**
     * Adds nodes after the character data
     */
     public function after(...$nodes): void {}
    /**
     * Append the string to the end of the character data of the node
     */
     public function appendData(string $data): true {}
    /**
     * Adds nodes before the character data
     */
     public function before(...$nodes): void {}
    /**
     * Remove a range of characters from the character data
     */
     public function deleteData(int $offset, int $count): bool {}
    /**
     * Insert a string at the specified UTF-8 codepoint offset
     */
     public function insertData(int $offset, string $data): bool {}
    /**
     * Removes the character data node
     */
     public function remove(): void {}
    /**
     * Replace a substring within the character data
     */
     public function replaceData(int $offset, int $count, string $data): bool {}
    /**
     * Replaces the character data with new nodes
     */
     public function replaceWith(...$nodes): void {}
    /**
     * Extracts a range of data from the character data
     */
     public function substringData(int $offset, int $count) {}
}

/**
 * The DOMChildNode interface
 */
 interface DOMChildNode {
    /**
     * Adds nodes after the node
     */
     public abstract function after(...$nodes): void;
    /**
     * Adds nodes before the node
     */
     public abstract function before(...$nodes): void;
    /**
     * Removes the node
     */
     public abstract function remove(): void;
    /**
     * Replaces the node with new nodes
     */
     public abstract function replaceWith(...$nodes): void;
}

/**
 * The DOMComment class
 */
 class DOMComment extends \DOMCharacterData implements \DOMChildNode {
    /**
     * Creates a new DOMComment object
     */
     public function __construct(string $data = "") {}
}

/**
 * The DOMDocument class
 */
 class DOMDocument extends \DOMNode implements \DOMParentNode {
    public ?string $actualEncoding;
    public int $childElementCount;
    public mixed $config;
    public ?\DOMDocumentType $doctype;
    public ?\DOMElement $documentElement;
    public ?string $documentURI;
    public ?string $encoding;
    public ?\DOMElement $firstElementChild;
    public bool $formatOutput;
    public \DOMImplementation $implementation;
    public ?\DOMElement $lastElementChild;
    public bool $preserveWhiteSpace;
    public bool $recover;
    public bool $resolveExternals;
    public bool $standalone;
    public bool $strictErrorChecking;
    public bool $substituteEntities;
    public bool $validateOnParse;
    public ?string $version;
    public ?string $xmlEncoding;
    public bool $xmlStandalone;
    public ?string $xmlVersion;
    /**
     * Creates a new DOMDocument object
     */
     public function __construct(string $version = "1.0", string $encoding = "") {}
    /**
     * Transfer a node from another document
     */
     public function adoptNode(\DOMNode $node): \DOMNode|false {}
    /**
     * Appends nodes after the last child node
     */
     public function append(...$nodes): void {}
    /**
     * Create new attribute
     */
     public function createAttribute(string $localName) {}
    /**
     * Create new attribute node with an associated namespace
     */
     public function createAttributeNS(?string $namespace, string $qualifiedName) {}
    /**
     * Create new cdata node
     */
     public function createCDATASection(string $data) {}
    /**
     * Create new comment node
     */
     public function createComment(string $data): \DOMComment {}
    /**
     * Create new document fragment
     */
     public function createDocumentFragment(): \DOMDocumentFragment {}
    /**
     * Create new element node
     */
     public function createElement(string $localName, string $value = "") {}
    /**
     * Create new element node with an associated namespace
     */
     public function createElementNS(?string $namespace, string $qualifiedName, string $value = "") {}
    /**
     * Create new entity reference node
     */
     public function createEntityReference(string $name) {}
    /**
     * Creates new PI node
     */
     public function createProcessingInstruction(string $target, string $data = "") {}
    /**
     * Create new text node
     */
     public function createTextNode(string $data): \DOMText {}
    /**
     * Searches for an element with a certain id
     */
     public function getElementById(string $elementId): ?\DOMElement {}
    /**
     * Searches for all elements with given local tag name
     */
     public function getElementsByTagName(string $qualifiedName): \DOMNodeList {}
    /**
     * Searches for all elements with given tag name in specified namespace
     */
     public function getElementsByTagNameNS(?string $namespace, string $localName): \DOMNodeList {}
    /**
     * Import node into current document
     */
     public function importNode(\DOMNode $node, bool $deep = false) {}
    /**
     * Load XML from a file
     */
     public function load(string $filename, int $options = 0): bool {}
    /**
     * Load HTML from a string
     */
     public function loadHTML(string $source, int $options = 0): bool {}
    /**
     * Load HTML from a file
     */
     public function loadHTMLFile(string $filename, int $options = 0): bool {}
    /**
     * Load XML from a string
     */
     public function loadXML(string $source, int $options = 0): bool {}
    /**
     * Normalizes the document
     */
     public function normalizeDocument(): void {}
    /**
     * Prepends nodes before the first child node
     */
     public function prepend(...$nodes): void {}
    /**
     * Register extended class used to create base node type
     */
     public function registerNodeClass(string $baseClass, ?string $extendedClass): true {}
    /**
     * Performs relaxNG validation on the document
     */
     public function relaxNGValidate(string $filename): bool {}
    /**
     * Performs relaxNG validation on the document
     */
     public function relaxNGValidateSource(string $source): bool {}
    /**
     * Replace children in document (PHP 8 >= 8.3.0)
     */
     public function replaceChildren(...$nodes): void {}
    /**
     * Dumps the internal XML tree back into a file
     */
     public function save(string $filename, int $options = 0): int|false {}
    /**
     * Dumps the internal document into a string using HTML formatting
     */
     public function saveHTML(?\DOMNode $node = NULL): string|false {}
    /**
     * Dumps the internal document into a file using HTML formatting
     */
     public function saveHTMLFile(string $filename): int|false {}
    /**
     * Dumps the internal XML tree back into a string
     */
     public function saveXML(?\DOMNode $node = NULL, int $options = 0): string|false {}
    /**
     * Validates a document based on a schema. Only XML Schema 1.0 is supported.
     */
     public function schemaValidate(string $filename, int $flags = 0): bool {}
    /**
     * Validates a document based on a schema
     */
     public function schemaValidateSource(string $source, int $flags = 0): bool {}
    /**
     * Validates the document based on its DTD
     */
     public function validate(): bool {}
    /**
     * Substitutes XIncludes in a DOMDocument Object
     */
     public function xinclude(int $options = 0): int|false {}
}

/**
 * The DOMDocumentFragment class
 */
 class DOMDocumentFragment extends \DOMNode implements \DOMParentNode {
    public int $childElementCount;
    public ?\DOMElement $firstElementChild;
    public ?\DOMElement $lastElementChild;
    /**
     * Constructs a DOMDocumentFragment object
     */
     public function __construct() {}
    /**
     * Appends nodes after the last child node
     */
     public function append(...$nodes): void {}
    /**
     * Append raw XML data
     */
     public function appendXML(string $data): bool {}
    /**
     * Prepends nodes before the first child node
     */
     public function prepend(...$nodes): void {}
    /**
     * Replace children in fragment (PHP 8 >= 8.3.0)
     */
     public function replaceChildren(...$nodes): void {}
}

/**
 * The DOMDocumentType class
 */
 class DOMDocumentType extends \DOMNode {
    public \DOMNamedNodeMap $entities;
    public ?string $internalSubset;
    public string $name;
    public \DOMNamedNodeMap $notations;
    public string $publicId;
    public string $systemId;
}

/**
 * The DOMElement class
 */
 class DOMElement extends \DOMNode implements \DOMChildNode, \DOMParentNode {
    public int $childElementCount;
    public string $className;
    public ?\DOMElement $firstElementChild;
    public string $id;
    public ?\DOMElement $lastElementChild;
    public ?\DOMElement $nextElementSibling;
    public ?\DOMElement $previousElementSibling;
    public mixed $schemaTypeInfo;
    public string $tagName;
    /**
     * Creates a new DOMElement object
     */
     public function __construct(string $qualifiedName, ?string $value = NULL, string $namespace = "") {}
    /**
     * Adds nodes after the element
     */
     public function after(...$nodes): void {}
    /**
     * Appends nodes after the last child node
     */
     public function append(...$nodes): void {}
    /**
     * Adds nodes before the element
     */
     public function before(...$nodes): void {}
    /**
     * Returns value of attribute
     */
     public function getAttribute(string $qualifiedName): string {}
    /**
     * Returns value of attribute
     */
     public function getAttributeNS(?string $namespace, string $localName): string {}
    /**
     * Get attribute names (PHP 8 >= 8.3.0)
     */
     public function getAttributeNames(): array {}
    /**
     * Returns attribute node
     */
     public function getAttributeNode(string $qualifiedName) {}
    /**
     * Returns attribute node
     */
     public function getAttributeNodeNS(?string $namespace, string $localName) {}
    /**
     * Gets elements by tagname
     */
     public function getElementsByTagName(string $qualifiedName): \DOMNodeList {}
    /**
     * Get elements by namespaceURI and localName
     */
     public function getElementsByTagNameNS(?string $namespace, string $localName): \DOMNodeList {}
    /**
     * Checks to see if attribute exists
     */
     public function hasAttribute(string $qualifiedName): bool {}
    /**
     * Checks to see if attribute exists
     */
     public function hasAttributeNS(?string $namespace, string $localName): bool {}
    /**
     * Insert adjacent element (PHP 8 >= 8.3.0)
     */
     public function insertAdjacentElement(string $where, \DOMElement $element): ?\DOMElement {}
    /**
     * Insert adjacent text (PHP 8 >= 8.3.0)
     */
     public function insertAdjacentText(string $where, string $data): void {}
    /**
     * Prepends nodes before the first child node
     */
     public function prepend(...$nodes): void {}
    /**
     * Removes the element
     */
     public function remove(): void {}
    /**
     * Removes attribute
     */
     public function removeAttribute(string $qualifiedName): bool {}
    /**
     * Removes attribute
     */
     public function removeAttributeNS(?string $namespace, string $localName): void {}
    /**
     * Removes attribute
     */
     public function removeAttributeNode(\DOMAttr $attr) {}
    /**
     * Replace children in element (PHP 8 >= 8.3.0)
     */
     public function replaceChildren(...$nodes): void {}
    /**
     * Replaces the element with new nodes
     */
     public function replaceWith(...$nodes): void {}
    /**
     * Adds new or modifies existing attribute
     */
     public function setAttribute(string $qualifiedName, string $value) {}
    /**
     * Adds new attribute
     */
     public function setAttributeNS(?string $namespace, string $qualifiedName, string $value): void {}
    /**
     * Adds new attribute node to element
     */
     public function setAttributeNode(\DOMAttr $attr) {}
    /**
     * Adds new attribute node to element
     */
     public function setAttributeNodeNS(\DOMAttr $attr) {}
    /**
     * Declares the attribute specified by name to be of type ID
     */
     public function setIdAttribute(string $qualifiedName, bool $isId): void {}
    /**
     * Declares the attribute specified by local name and namespace URI to be of type ID
     */
     public function setIdAttributeNS(string $namespace, string $qualifiedName, bool $isId): void {}
    /**
     * Declares the attribute specified by node to be of type ID
     */
     public function setIdAttributeNode(\DOMAttr $attr, bool $isId): void {}
    /**
     * Toggle attribute (PHP 8 >= 8.3.0)
     */
     public function toggleAttribute(string $qualifiedName, ?bool $force = NULL): bool {}
}

/**
 * The DOMEntity class
 */
 class DOMEntity extends \DOMNode {
    public ?string $actualEncoding;
    public ?string $encoding;
    public ?string $notationName;
    public ?string $publicId;
    public ?string $systemId;
    public ?string $version;
}

/**
 * The DOMEntityReference class
 */
 class DOMEntityReference extends \DOMNode {
    /**
     * Creates a new DOMEntityReference object
     */
     public function __construct(string $name) {}
}

/**
 * The DOMException / Dom\Exception class
 */
 final class DOMException extends \Exception implements \Stringable, \Throwable {
    public $code;
}

/**
 * The DOMImplementation class
 */
 class DOMImplementation {
    /**
     * Creates a DOMDocument object of the specified type with its document element
     */
     public function createDocument(?string $namespace = NULL, string $qualifiedName = "", ?\DOMDocumentType $doctype = NULL): \DOMDocument {}
    /**
     * Creates an empty DOMDocumentType object
     */
     public function createDocumentType(string $qualifiedName, string $publicId = "", string $systemId = "") {}
    /**
     * Test if the DOM implementation implements a specific feature
     */
     public function hasFeature(string $feature, string $version): bool {}
}

/**
 * The DOMNameSpaceNode class
 */
 class DOMNameSpaceNode {
    public bool $isConnected;
    public ?string $localName;
    public ?string $namespaceURI;
    public string $nodeName;
    public int $nodeType;
    public ?string $nodeValue;
    public ?\DOMDocument $ownerDocument;
    public ?\DOMElement $parentElement;
    public ?\DOMNode $parentNode;
    public string $prefix;
    public function __sleep(): array {}
    public function __wakeup(): void {}
}

/**
 * The DOMNamedNodeMap class
 */
 class DOMNamedNodeMap implements \Countable, \IteratorAggregate, \Traversable {
    public int $length;
    /**
     * Get number of nodes in the map
     */
     public function count(): int {}
    /**
     * Retrieve an external iterator
     */
     public function getIterator(): \Iterator {}
    /**
     * Retrieves a node specified by name
     */
     public function getNamedItem(string $qualifiedName): ?\DOMNode {}
    /**
     * Retrieves a node specified by local name and namespace URI
     */
     public function getNamedItemNS(?string $namespace, string $localName): ?\DOMNode {}
    /**
     * Retrieves a node specified by index
     */
     public function item(int $index): ?\DOMNode {}
}

/**
 * The DOMNode class
 */
 class DOMNode {
    public const DOCUMENT_POSITION_CONTAINED_BY = 16;
    public const DOCUMENT_POSITION_CONTAINS = 8;
    public const DOCUMENT_POSITION_DISCONNECTED = 1;
    public const DOCUMENT_POSITION_FOLLOWING = 4;
    public const DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC = 32;
    public const DOCUMENT_POSITION_PRECEDING = 2;
    public ?\DOMNamedNodeMap $attributes;
    public ?string $baseURI;
    public \DOMNodeList $childNodes;
    public ?\DOMNode $firstChild;
    public bool $isConnected;
    public ?\DOMNode $lastChild;
    public ?string $localName;
    public ?string $namespaceURI;
    public ?\DOMNode $nextSibling;
    public string $nodeName;
    public int $nodeType;
    public ?string $nodeValue;
    public ?\DOMDocument $ownerDocument;
    public ?\DOMElement $parentElement;
    public ?\DOMNode $parentNode;
    public string $prefix;
    public ?\DOMNode $previousSibling;
    public string $textContent;
    /**
     * Canonicalize nodes to a string
     */
     public function C14N(bool $exclusive = false, bool $withComments = false, ?array $xpath = NULL, ?array $nsPrefixes = NULL): string|false {}
    /**
     * Canonicalize nodes to a file
     */
     public function C14NFile(string $uri, bool $exclusive = false, bool $withComments = false, ?array $xpath = NULL, ?array $nsPrefixes = NULL): int|false {}
    public function __sleep(): array {}
    public function __wakeup(): void {}
    /**
     * Adds new child at the end of the children
     */
     public function appendChild(\DOMNode $node) {}
    /**
     * Clones a node
     */
     public function cloneNode(bool $deep = false) {}
    /**
     * Compares the position of two nodes (PHP 8 >= 8.4.0)
     */
     public function compareDocumentPosition(\DOMNode $other): int {}
    /**
     * Checks if node contains other node (PHP 8 >= 8.3.0)
     */
     public function contains(\DOMNode|\DOMNameSpaceNode|null $other): bool {}
    /**
     * Get line number for a node
     */
     public function getLineNo(): int {}
    /**
     * Get an XPath for a node
     */
     public function getNodePath(): ?string {}
    /**
     * Get root node (PHP 8 >= 8.3.0)
     */
     public function getRootNode(?array $options = NULL): \DOMNode {}
    /**
     * Checks if node has attributes
     */
     public function hasAttributes(): bool {}
    /**
     * Checks if node has children
     */
     public function hasChildNodes(): bool {}
    /**
     * Adds a new child before a reference node
     */
     public function insertBefore(\DOMNode $node, ?\DOMNode $child = NULL) {}
    /**
     * Checks if the specified namespaceURI is the default namespace or not
     */
     public function isDefaultNamespace(string $namespace): bool {}
    /**
     * Checks that both nodes are equal (PHP 8 >= 8.3.0)
     */
     public function isEqualNode(?\DOMNode $otherNode): bool {}
    /**
     * Indicates if two nodes are the same node
     */
     public function isSameNode(\DOMNode $otherNode): bool {}
    /**
     * Checks if feature is supported for specified version
     */
     public function isSupported(string $feature, string $version): bool {}
    /**
     * Gets the namespace URI of the node based on the prefix
     */
     public function lookupNamespaceURI(?string $prefix): ?string {}
    /**
     * Gets the namespace prefix of the node based on the namespace URI
     */
     public function lookupPrefix(string $namespace): ?string {}
    /**
     * Normalizes the node
     */
     public function normalize(): void {}
    /**
     * Removes child from list of children
     */
     public function removeChild(\DOMNode $child) {}
    /**
     * Replaces a child
     */
     public function replaceChild(\DOMNode $node, \DOMNode $child) {}
}

/**
 * The DOMNodeList class
 */
 class DOMNodeList implements \Countable, \IteratorAggregate, \Traversable {
    public int $length;
    /**
     * Get number of nodes in the list
     */
     public function count(): int {}
    /**
     * Retrieve an external iterator
     */
     public function getIterator(): \Iterator {}
    /**
     * Retrieves a node specified by index
     */
     public function item(int $index) {}
}

/**
 * The DOMNotation class
 */
 class DOMNotation extends \DOMNode {
    public string $publicId;
    public string $systemId;
}

/**
 * The DOMParentNode interface
 */
 interface DOMParentNode {
    /**
     * Appends nodes after the last child node
     */
     public abstract function append(...$nodes): void;
    /**
     * Prepends nodes before the first child node
     */
     public abstract function prepend(...$nodes): void;
    /**
     * Replace children in node (PHP 8 >= 8.3.0)
     */
     public abstract function replaceChildren(...$nodes): void;
}

/**
 * The DOMProcessingInstruction class
 */
 class DOMProcessingInstruction extends \DOMNode {
    public string $data;
    public string $target;
    /**
     * Creates a new DOMProcessingInstruction object
     */
     public function __construct(string $name, string $value = "") {}
}

/**
 * The DOMText class
 */
 class DOMText extends \DOMCharacterData implements \DOMChildNode {
    public string $wholeText;
    /**
     * Creates a new DOMText object
     */
     public function __construct(string $data = "") {}
    /**
     * Returns whether this text node contains whitespace in element content
     */
     public function isElementContentWhitespace(): bool {}
    /**
     * Indicates whether this text node contains whitespace
     */
     public function isWhitespaceInElementContent(): bool {}
    /**
     * Breaks this node into two nodes at the specified offset
     */
     public function splitText(int $offset) {}
}

/**
 * The DOMXPath class
 */
 class DOMXPath {
    public \DOMDocument $document;
    public bool $registerNodeNamespaces;
    /**
     * Creates a new DOMXPath object
     */
     public function __construct(\DOMDocument $document, bool $registerNodeNS = true) {}
    /**
     * Evaluates the given XPath expression and returns a typed result if possible
     */
     public function evaluate(string $expression, ?\DOMNode $contextNode = NULL, bool $registerNodeNS = true): mixed {}
    /**
     * Evaluates the given XPath expression
     */
     public function query(string $expression, ?\DOMNode $contextNode = NULL, bool $registerNodeNS = true): mixed {}
    /**
     * Quotes a string for use in an XPath expression (PHP 8 >= 8.4.0)
     */
     public static function quote(string $str): string {}
    /**
     * Registers the namespace with the DOMXPath object
     */
     public function registerNamespace(string $prefix, string $namespace): bool {}
    /**
     * Register a PHP functions as namespaced XPath function
     */
     public function registerPhpFunctionNS(string $namespaceURI, string $name, callable $callable): void {}
    /**
     * Register PHP functions as XPath functions
     */
     public function registerPhpFunctions(array|string|null $restrict = NULL): void {}
}

/**
 * DateError 类 (PHP 8 >= 8.3.0)
 */
 class DateError extends \Error implements \Stringable, \Throwable {
}

/**
 * DateException 类 (PHP 8 >= 8.3.0)
 */
 class DateException extends \Exception implements \Stringable, \Throwable {
}

/**
 * DateInterval 类
 */
 class DateInterval {
    /**
     * Creates a new DateInterval object
     */
     public function __construct(string $duration) {}
    public function __serialize(): array {}
    public static function __set_state(array $array): \DateInterval {}
    public function __unserialize(array $data): void {}
    public function __wakeup(): void {}
    /**
     * Sets up a DateInterval from the relative parts of the string
     */
     public static function createFromDateString(string $datetime): \DateInterval {}
    /**
     * Formats the interval
     */
     public function format(string $format): string {}
}

/**
 * The DateInvalidOperationException class (PHP 8 >= 8.3.0)
 */
 class DateInvalidOperationException extends \DateException implements \Stringable, \Throwable {
}

/**
 * The DateInvalidTimeZoneException class (PHP 8 >= 8.3.0)
 */
 class DateInvalidTimeZoneException extends \DateException implements \Stringable, \Throwable {
}

/**
 * The DateMalformedIntervalStringException class (PHP 8 >= 8.3.0)
 */
 class DateMalformedIntervalStringException extends \DateException implements \Stringable, \Throwable {
}

/**
 * The DateMalformedPeriodStringException class (PHP 8 >= 8.3.0)
 */
 class DateMalformedPeriodStringException extends \DateException implements \Stringable, \Throwable {
}

/**
 * The DateMalformedStringException class (PHP 8 >= 8.3.0)
 */
 class DateMalformedStringException extends \DateException implements \Stringable, \Throwable {
}

/**
 * The DateObjectError class (PHP 8 >= 8.3.0)
 */
 class DateObjectError extends \DateError implements \Stringable, \Throwable {
}

/**
 * DatePeriod 类
 */
 class DatePeriod implements \IteratorAggregate, \Traversable {
    public const EXCLUDE_START_DATE = 1;
    public const INCLUDE_END_DATE = 2;
    public ?\DateTimeInterface $current;
    public ?\DateTimeInterface $end;
    public bool $include_end_date;
    public bool $include_start_date;
    public ?\DateInterval $interval;
    public int $recurrences;
    public ?\DateTimeInterface $start;
    /**
     * Creates a new DatePeriod object
     */
     public function __construct($start, $interval = null, $end = null, $options = null) {}
    public function __serialize(): array {}
    public static function __set_state(array $array): \DatePeriod {}
    public function __unserialize(array $data): void {}
    public function __wakeup(): void {}
    /**
     * Creates a new DatePeriod object from an ISO8601 string (PHP 8 >= 8.3.0)
     */
     public static function createFromISO8601String(string $specification, int $options = 0): static {}
    /**
     * Gets the interval
     */
     public function getDateInterval(): \DateInterval {}
    /**
     * Gets the end date
     */
     public function getEndDate(): ?\DateTimeInterface {}
    public function getIterator(): \Iterator {}
    /**
     * Gets the number of recurrences
     */
     public function getRecurrences(): ?int {}
    /**
     * Gets the start date
     */
     public function getStartDate(): \DateTimeInterface {}
}

/**
 * The DateRangeError class (PHP 8 >= 8.3.0)
 */
 class DateRangeError extends \DateError implements \Stringable, \Throwable {
}

/**
 * DateTime 类
 */
 class DateTime implements \DateTimeInterface {
    /**
     * 返回新的 DateTime 对象
     */
     public function __construct(string $datetime = "now", ?\DateTimeZone $timezone = NULL) {}
    public function __serialize(): array {}
    public static function __set_state(array $array): \DateTime {}
    public function __unserialize(array $data): void {}
    public function __wakeup(): void {}
    /**
     * 修改 DateTime 对象，增加天、月、年、小时、分钟以及秒的数量。
     */
     public function add(\DateInterval $interval): \DateTime {}
    /**
     * 根据指定格式解析时间字符串
     */
     public static function createFromFormat(string $format, string $datetime, ?\DateTimeZone $timezone = NULL): \DateTime|false {}
    /**
     * Returns new DateTime instance encapsulating the given DateTimeImmutable object
     */
     public static function createFromImmutable(\DateTimeImmutable $object): static {}
    /**
     * Returns new DateTime object encapsulating the given DateTimeInterface object
     */
     public static function createFromInterface(\DateTimeInterface $object): \DateTime {}
    /**
     * Creates an instance from a Unix timestamp (PHP 8 >= 8.4.0)
     */
     public static function createFromTimestamp(int|float $timestamp): static {}
    /**
     * 返回两个 DateTime 之间的差值
     */
     public function diff(\DateTimeInterface $targetObject, bool $absolute = false): \DateInterval {}
    /**
     * 按照指定格式返回格式化后的日期
     */
     public function format(string $format): string {}
    /**
     * 别名 DateTimeImmutable::getLastErrors
     */
     public static function getLastErrors(): array|false {}
    public function getMicrosecond(): int {}
    /**
     * 返回时差
     */
     public function getOffset(): int {}
    /**
     * 获取 Unix 时间戳
     */
     public function getTimestamp(): int {}
    /**
     * 返回相对于指定 DateTime 的时区
     */
     public function getTimezone(): \DateTimeZone|false {}
    /**
     * 修改日期时间对象的值
     */
     public function modify(string $modifier): \DateTime {}
    /**
     * 设置日期
     */
     public function setDate(int $year, int $month, int $day): \DateTime {}
    /**
     * 设置 ISO 日期
     */
     public function setISODate(int $year, int $week, int $dayOfWeek = 1): \DateTime {}
    /**
     * Sets microsecond part of the time (PHP 8 >= 8.4.0)
     */
     public function setMicrosecond(int $microsecond): static {}
    /**
     * 设置时间
     */
     public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0): \DateTime {}
    /**
     * 以 Unix 时间戳的方式设置日期和时间
     */
     public function setTimestamp(int $timestamp): \DateTime {}
    /**
     * 设置 DateTime 对象的时区
     */
     public function setTimezone(\DateTimeZone $timezone): \DateTime {}
    /**
     * 对 DateTime 对象减去一定量的日、月、年、小时、分钟和秒。
     */
     public function sub(\DateInterval $interval): \DateTime {}
}

/**
 * The DateTimeImmutable class
 */
 class DateTimeImmutable implements \DateTimeInterface {
    /**
     * Returns new DateTimeImmutable object
     */
     public function __construct(string $datetime = "now", ?\DateTimeZone $timezone = NULL) {}
    public function __serialize(): array {}
    public static function __set_state(array $array): \DateTimeImmutable {}
    public function __unserialize(array $data): void {}
    public function __wakeup(): void {}
    /**
     * Returns a new object, with added amount of days, months, years, hours, minutes and seconds
     */
     public function add(\DateInterval $interval): \DateTimeImmutable {}
    /**
     * Parses a time string according to a specified format
     */
     public static function createFromFormat(string $format, string $datetime, ?\DateTimeZone $timezone = NULL): \DateTimeImmutable|false {}
    /**
     * Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object
     */
     public static function createFromInterface(\DateTimeInterface $object): \DateTimeImmutable {}
    /**
     * Returns new DateTimeImmutable instance encapsulating the given DateTime object
     */
     public static function createFromMutable(\DateTime $object): static {}
    /**
     * Creates an instance from a Unix timestamp (PHP 8 >= 8.4.0)
     */
     public static function createFromTimestamp(int|float $timestamp): static {}
    public function diff(\DateTimeInterface $targetObject, bool $absolute = false): \DateInterval {}
    public function format(string $format): string {}
    /**
     * Returns the warnings and errors
     */
     public static function getLastErrors(): array|false {}
    public function getMicrosecond(): int {}
    public function getOffset(): int {}
    public function getTimestamp(): int {}
    public function getTimezone(): \DateTimeZone|false {}
    /**
     * Creates a new object with modified timestamp
     */
     public function modify(string $modifier): \DateTimeImmutable {}
    /**
     * Sets the date
     */
     public function setDate(int $year, int $month, int $day): \DateTimeImmutable {}
    /**
     * Sets the ISO date
     */
     public function setISODate(int $year, int $week, int $dayOfWeek = 1): \DateTimeImmutable {}
    /**
     * Sets microsecond part of the time (PHP 8 >= 8.4.0)
     */
     public function setMicrosecond(int $microsecond): static {}
    /**
     * Sets the time
     */
     public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0): \DateTimeImmutable {}
    /**
     * Sets the date and time based on a Unix timestamp
     */
     public function setTimestamp(int $timestamp): \DateTimeImmutable {}
    /**
     * Sets the time zone
     */
     public function setTimezone(\DateTimeZone $timezone): \DateTimeImmutable {}
    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds
     */
     public function sub(\DateInterval $interval): \DateTimeImmutable {}
}

/**
 * The DateTimeInterface interface
 */
 interface DateTimeInterface {
    const ATOM = "Y-m-d\\TH:i:sP";
    const COOKIE = "l, d-M-Y H:i:s T";
    const ISO8601 = "Y-m-d\\TH:i:sO";
    const ISO8601_EXPANDED = "X-m-d\\TH:i:sP";
    const RFC1036 = "D, d M y H:i:s O";
    const RFC1123 = "D, d M Y H:i:s O";
    const RFC2822 = "D, d M Y H:i:s O";
    const RFC3339 = "Y-m-d\\TH:i:sP";
    const RFC3339_EXTENDED = "Y-m-d\\TH:i:s.vP";
    const RFC7231 = "D, d M Y H:i:s \\G\\M\\T";
    const RFC822 = "D, d M y H:i:s O";
    const RFC850 = "l, d-M-y H:i:s T";
    const RSS = "D, d M Y H:i:s O";
    const W3C = "Y-m-d\\TH:i:sP";
    public abstract function __serialize(): array;
    public abstract function __unserialize(array $data): void;
    public abstract function __wakeup(): void;
    public abstract function diff(\DateTimeInterface $targetObject, bool $absolute = false): \DateInterval;
    public abstract function format(string $format): string;
    /**
     * Gets the microsecond part of the Unix timestamp (PHP 8 >= 8.4.0)
     */
     public abstract function getMicrosecond(): int;
    public abstract function getOffset(): int;
    public abstract function getTimestamp(): int;
    public abstract function getTimezone(): \DateTimeZone|false;
}

/**
 * DateTimeZone 类
 */
 class DateTimeZone {
    public const AFRICA = 1;
    public const ALL = 2047;
    public const ALL_WITH_BC = 4095;
    public const AMERICA = 2;
    public const ANTARCTICA = 4;
    public const ARCTIC = 8;
    public const ASIA = 16;
    public const ATLANTIC = 32;
    public const AUSTRALIA = 64;
    public const EUROPE = 128;
    public const INDIAN = 256;
    public const PACIFIC = 512;
    public const PER_COUNTRY = 4096;
    public const UTC = 1024;
    /**
     * 创建新的DateTimeZone对象
     */
     public function __construct(string $timezone) {}
    public function __serialize(): array {}
    public static function __set_state(array $array): \DateTimeZone {}
    public function __unserialize(array $data): void {}
    public function __wakeup(): void {}
    /**
     * 返回与时区相关的定位信息
     */
     public function getLocation(): array|false {}
    /**
     * 返回时区名称
     */
     public function getName(): string {}
    /**
     * 返回相对于 GMT 的时差
     */
     public function getOffset(\DateTimeInterface $datetime): int {}
    /**
     * Returns all transitions for the timezone
     */
     public function getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = 2147483647): array|false {}
    /**
     * 返回一个包含 dst (夏令时)，时差和时区信息的关联数组。
     */
     public static function listAbbreviations(): array {}
    /**
     * 返回包含了所有时区标识符的数字索引数组
     */
     public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = NULL): array {}
}

/**
 * The DeflateContext class
 */
 final class DeflateContext {
}

final class DelayedTargetValidation {
}

/**
 * Deprecated 属性 (PHP 8 >= 8.4.0)
 */
 final class Deprecated {
    public readonly ?string $message;
    public readonly ?string $since;
    /**
     * 构造新的 Deprecated 属性实例 (PHP 8 >= 8.4.0)
     */
     public function __construct(?string $message = NULL, ?string $since = NULL) {}
}

/**
 * Directory 类
 */
 final class Directory {
    public readonly mixed $handle;
    public readonly string $path;
    /**
     * 关闭目录句柄
     */
     public function close(): void {}
    /**
     * 从目录句柄中读取条目
     */
     public function read(): string|false {}
    /**
     * 倒回目录句柄
     */
     public function rewind(): void {}
}

/**
 * The DirectoryIterator class
 */
 class DirectoryIterator extends \SplFileInfo implements \Iterator, \SeekableIterator, \Stringable, \Traversable {
    /**
     * Constructs a new directory iterator from a path
     */
     public function __construct(string $directory) {}
    public function __toString(): string {}
    /**
     * Return the current DirectoryIterator item
     */
     public function current(): mixed {}
    /**
     * Get base name of current DirectoryIterator item
     */
     public function getBasename(string $suffix = ""): string {}
    /**
     * Gets the file extension
     */
     public function getExtension(): string {}
    /**
     * Return file name of current DirectoryIterator item
     */
     public function getFilename(): string {}
    /**
     * Determine if current DirectoryIterator item is '.' or '..'
     */
     public function isDot(): bool {}
    /**
     * Return the key for the current DirectoryIterator item
     */
     public function key(): mixed {}
    /**
     * Move forward to next DirectoryIterator item
     */
     public function next(): void {}
    /**
     * Rewind the DirectoryIterator back to the start
     */
     public function rewind(): void {}
    /**
     * Seek to a DirectoryIterator item
     */
     public function seek(int $offset): void {}
    /**
     * Check whether current DirectoryIterator position is a valid file
     */
     public function valid(): bool {}
}

/**
 * DivisionByZeroError
 */
 class DivisionByZeroError extends \ArithmeticError implements \Stringable, \Throwable {
}

/**
 * The DomainException class
 */
 class DomainException extends \LogicException implements \Stringable, \Throwable {
}

/**
 * The EmptyIterator class
 */
 class EmptyIterator implements \Iterator, \Traversable {
    /**
     * The current() method
     */
     public function current(): never {}
    /**
     * The key() method
     */
     public function key(): never {}
    /**
     * The next() method
     */
     public function next(): void {}
    /**
     * The rewind() method
     */
     public function rewind(): void {}
    /**
     * Checks whether the current element is valid
     */
     public function valid(): false {}
}

/**
 * Error
 */
 class Error implements \Stringable, \Throwable {
    protected $code;
    protected string $file;
    protected int $line;
    protected $message;
    private ?\Throwable $previous;
    private string $string;
    private array $trace;
    private function __clone(): void {}
    /**
     * 初始化 error 对象
     */
     public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = NULL) {}
    public function __toString(): string {}
    public function __wakeup(): void {}
    /**
     * 获取错误代码
     */
     public final function getCode() {}
    /**
     * 获取错误发生时的文件
     */
     public final function getFile(): string {}
    /**
     * 获取错误发生时的行号
     */
     public final function getLine(): int {}
    /**
     * 获取错误信息
     */
     public final function getMessage(): string {}
    /**
     * 返回先前的 Throwable
     */
     public final function getPrevious(): ?\Throwable {}
    /**
     * 获取调用栈（stack trace）
     */
     public final function getTrace(): array {}
    /**
     * 获取字符串形式的调用栈（stack trace）
     */
     public final function getTraceAsString(): string {}
}

/**
 * ErrorException
 */
 class ErrorException extends \Exception implements \Stringable, \Throwable {
    protected int $severity;
    /**
     * 构造一个异常（Exception）
     */
     public function __construct(string $message = "", int $code = 0, int $severity = E_ERROR, ?string $filename = NULL, ?int $line = NULL, ?\Throwable $previous = NULL) {}
    /**
     * 获取异常的严重程度
     */
     public final function getSeverity(): int {}
}

/**
 * Exception
 */
 class Exception implements \Stringable, \Throwable {
    protected $code;
    protected string $file;
    protected int $line;
    protected $message;
    private ?\Throwable $previous;
    private string $string;
    private array $trace;
    private function __clone(): void {}
    /**
     * 异常构造函数
     */
     public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = NULL) {}
    public function __toString(): string {}
    public function __wakeup(): void {}
    /**
     * 获取异常代码
     */
     public final function getCode() {}
    /**
     * 创建异常时的程序文件名称
     */
     public final function getFile(): string {}
    /**
     * 获取创建的异常所在文件中的行号
     */
     public final function getLine(): int {}
    /**
     * 获取异常消息内容
     */
     public final function getMessage(): string {}
    /**
     * 返回前一个 Throwable
     */
     public final function getPrevious(): ?\Throwable {}
    /**
     * 获取异常追踪信息
     */
     public final function getTrace(): array {}
    /**
     * 获取字符串类型的异常追踪信息
     */
     public final function getTraceAsString(): string {}
}

/**
 * C 代码和数据的主接口
 */
 final class FFI {
    public const __BIGGEST_ALIGNMENT__ = 8;
    /**
     * Creates an unmanaged pointer to C data
     */
     public static function addr(\FFI\CData &$ptr): \FFI\CData {}
    /**
     * Gets the alignment
     */
     public static function alignof(\FFI\CData|\FFI\CType &$ptr): int {}
    /**
     * Dynamically constructs a new C array type
     */
     public static function arrayType(\FFI\CType $type, array $dimensions): \FFI\CType {}
    /**
     * Performs a C type cast
     */
     public static function cast(\FFI\CType|string $type, &$ptr): \FFI\CData {}
    /**
     * Creates a new FFI object
     */
     public static function cdef(string $code = "", ?string $lib = NULL): \FFI {}
    /**
     * Releases an unmanaged data structure
     */
     public static function free(\FFI\CData &$ptr): void {}
    /**
     * Checks whether a FFI\CData is a null pointer
     */
     public static function isNull(\FFI\CData &$ptr): bool {}
    /**
     * Loads C declarations from a C header file
     */
     public static function load(string $filename): ?\FFI {}
    /**
     * Compares memory areas
     */
     public static function memcmp(&$ptr1, &$ptr2, int $size): int {}
    /**
     * Copies one memory area to another
     */
     public static function memcpy(\FFI\CData &$to, &$from, int $size): void {}
    /**
     * Fills a memory area
     */
     public static function memset(\FFI\CData &$ptr, int $value, int $size): void {}
    /**
     * Creates a C data structure
     */
     public static function new(\FFI\CType|string $type, bool $owned = true, bool $persistent = false): \FFI\CData {}
    /**
     * Instantiates an FFI object with C declarations parsed during preloading
     */
     public static function scope(string $name): \FFI {}
    /**
     * Gets the size of C data or types
     */
     public static function sizeof(\FFI\CData|\FFI\CType &$ptr): int {}
    /**
     * Creates a PHP string from a memory area
     */
     public static function string(\FFI\CData &$ptr, ?int $size = NULL): string {}
    /**
     * Creates an FFI\CType object from a C declaration
     */
     public static function type(string $type): \FFI\CType {}
    /**
     * Gets the FFI\CType of FFI\CData
     */
     public static function typeof(\FFI\CData &$ptr): \FFI\CType {}
}

/**
 * 纤程（Fiber）类 (PHP 8 >= 8.1.0)
 */
 final class Fiber {
    /**
     * 创建新的 Fiber 实例 (PHP 8 >= 8.1.0)
     */
     public function __construct(callable $callback) {}
    /**
     * 获取当前正在执行的 Fiber 实例 (PHP 8 >= 8.1.0)
     */
     public static function getCurrent(): ?\Fiber {}
    /**
     * 获取 Fiber 的返回值 (PHP 8 >= 8.1.0)
     */
     public function getReturn(): mixed {}
    /**
     * 确认 fiber 是否正在运行 (PHP 8 >= 8.1.0)
     */
     public function isRunning(): bool {}
    /**
     * 确定 fiber 是否启动 (PHP 8 >= 8.1.0)
     */
     public function isStarted(): bool {}
    /**
     * 确认 fiber 是否挂起 (PHP 8 >= 8.1.0)
     */
     public function isSuspended(): bool {}
    /**
     * 确认 fiber 是否终止 (PHP 8 >= 8.1.0)
     */
     public function isTerminated(): bool {}
    /**
     * 使用值恢复 fiber 的执行 (PHP 8 >= 8.1.0)
     */
     public function resume(mixed $value = NULL): mixed {}
    /**
     * 启动 fiber 的执行 (PHP 8 >= 8.1.0)
     */
     public function start(mixed ...$args): mixed {}
    /**
     * 暂停当前 fiber 的执行 (PHP 8 >= 8.1.0)
     */
     public static function suspend(mixed $value = NULL): mixed {}
    /**
     * 用一个异常来恢复 fiber 的执行 (PHP 8 >= 8.1.0)
     */
     public function throw(\Throwable $exception): mixed {}
}

/**
 * FiberError (PHP 8 >= 8.1.0)
 */
 final class FiberError extends \Error implements \Stringable, \Throwable {
    /**
     * 不允许直接实例化的构造函数 (PHP 8 >= 8.1.0)
     */
     public function __construct() {}
}

/**
 * The FilesystemIterator class
 */
 class FilesystemIterator extends \DirectoryIterator implements \Iterator, \SeekableIterator, \Stringable, \Traversable {
    public const CURRENT_AS_FILEINFO = 0;
    public const CURRENT_AS_PATHNAME = 32;
    public const CURRENT_AS_SELF = 16;
    public const CURRENT_MODE_MASK = 240;
    public const FOLLOW_SYMLINKS = 16384;
    public const KEY_AS_FILENAME = 256;
    public const KEY_AS_PATHNAME = 0;
    public const KEY_MODE_MASK = 3840;
    public const NEW_CURRENT_AND_KEY = 256;
    public const OTHER_MODE_MASK = 28672;
    public const SKIP_DOTS = 4096;
    public const UNIX_PATHS = 8192;
    /**
     * Constructs a new filesystem iterator
     */
     public function __construct(string $directory, int $flags = 4096) {}
    /**
     * The current file
     */
     public function current(): \SplFileInfo|\FilesystemIterator|string {}
    /**
     * Get the handling flags
     */
     public function getFlags(): int {}
    /**
     * Retrieve the key for the current file
     */
     public function key(): string {}
    /**
     * Rewinds back to the beginning
     */
     public function rewind(): void {}
    /**
     * Sets handling flags
     */
     public function setFlags(int $flags): void {}
}

/**
 * FilterIterator 类
 */
 abstract class FilterIterator extends \IteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    /**
     * Construct a filterIterator
     */
     public function __construct(\Iterator $iterator) {}
    /**
     * Check whether the current element of the iterator is acceptable
     */
     public abstract function accept(): bool;
    /**
     * Move the iterator forward
     */
     public function next(): void {}
    /**
     * Rewind the iterator
     */
     public function rewind(): void {}
}

/**
 * The GMP class
 */
 final class GMP {
    /**
     * Create GMP number (PHP 8 >= 8.2.4)
     */
     public function __construct(string|int $num = 0, int $base = 0) {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
}

/**
 * The GdFont class (PHP 8 >= 8.1.0)
 */
 final class GdFont {
}

/**
 * GdImage 类
 */
 final class GdImage {
}

/**
 * 生成器类
 */
 final class Generator implements \Iterator, \Traversable {
    public function __debugInfo(): array {}
    /**
     * 返回当前产生的值
     */
     public function current(): mixed {}
    /**
     * 获取生成器的返回值
     */
     public function getReturn(): mixed {}
    /**
     * 返回当前产生的键
     */
     public function key(): mixed {}
    /**
     * 生成器继续执行
     */
     public function next(): void {}
    /**
     * 执行生成器，直至并包含第一个 yield 语句
     */
     public function rewind(): void {}
    /**
     * 向生成器中传入一个值
     */
     public function send(mixed $value): mixed {}
    /**
     * 向生成器中抛入一个异常
     */
     public function throw(\Throwable $exception): mixed {}
    /**
     * 检查迭代器是否被关闭
     */
     public function valid(): bool {}
}

/**
 * GlobIterator 类
 */
 class GlobIterator extends \FilesystemIterator implements \Countable, \Iterator, \SeekableIterator, \Stringable, \Traversable {
    /**
     * Construct a directory using glob
     */
     public function __construct(string $pattern, int $flags = 0) {}
    /**
     * Get the number of directories and files
     */
     public function count(): int {}
}

/**
 * HashContext 类
 */
 final class HashContext {
    /**
     * 私有构造方法以禁止直接实例化
     */
     private function __construct() {}
    public function __debugInfo(): array {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
}

/**
 * The InfiniteIterator class
 */
 class InfiniteIterator extends \IteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    /**
     * Constructs an InfiniteIterator
     */
     public function __construct(\Iterator $iterator) {}
    /**
     * Moves the inner Iterator forward or rewinds it
     */
     public function next(): void {}
}

/**
 * The InflateContext class
 */
 final class InflateContext {
}

/**
 * InternalIterator 类
 */
 final class InternalIterator implements \Iterator, \Traversable {
    /**
     * 禁止直接实例化私有构造方法
     */
     private function __construct() {}
    /**
     * 返回当前元素
     */
     public function current(): mixed {}
    /**
     * 返回当前元素的键
     */
     public function key(): mixed {}
    /**
     * 向前移动到下一个元素
     */
     public function next(): void {}
    /**
     * 迭代器返回到第一个元素
     */
     public function rewind(): void {}
    /**
     * 检测当前位置是否有效
     */
     public function valid(): bool {}
}

/**
 * The IntlBreakIterator class
 */
 class IntlBreakIterator implements \IteratorAggregate, \Traversable {
    public const DONE = -1;
    public const LINE_HARD = 100;
    public const LINE_HARD_LIMIT = 200;
    public const LINE_SOFT = 0;
    public const LINE_SOFT_LIMIT = 100;
    public const SENTENCE_SEP = 100;
    public const SENTENCE_SEP_LIMIT = 200;
    public const SENTENCE_TERM = 0;
    public const SENTENCE_TERM_LIMIT = 100;
    public const WORD_IDEO = 400;
    public const WORD_IDEO_LIMIT = 500;
    public const WORD_KANA = 300;
    public const WORD_KANA_LIMIT = 400;
    public const WORD_LETTER = 200;
    public const WORD_LETTER_LIMIT = 300;
    public const WORD_NONE = 0;
    public const WORD_NONE_LIMIT = 100;
    public const WORD_NUMBER = 100;
    public const WORD_NUMBER_LIMIT = 200;
    /**
     * Private constructor for disallowing instantiation
     */
     private function __construct() {}
    /**
     * Create break iterator for boundaries of combining character sequences
     */
     public static function createCharacterInstance(?string $locale = NULL): ?\IntlBreakIterator {}
    /**
     * Create break iterator for boundaries of code points
     */
     public static function createCodePointInstance(): \IntlCodePointBreakIterator {}
    /**
     * Create break iterator for logically possible line breaks
     */
     public static function createLineInstance(?string $locale = NULL): ?\IntlBreakIterator {}
    /**
     * Create break iterator for sentence breaks
     */
     public static function createSentenceInstance(?string $locale = NULL): ?\IntlBreakIterator {}
    /**
     * Create break iterator for title-casing breaks
     */
     public static function createTitleInstance(?string $locale = NULL): ?\IntlBreakIterator {}
    /**
     * Create break iterator for word breaks
     */
     public static function createWordInstance(?string $locale = NULL): ?\IntlBreakIterator {}
    /**
     * Get index of current position
     */
     public function current(): int {}
    /**
     * Set position to the first character in the text
     */
     public function first(): int {}
    /**
     * Advance the iterator to the first boundary following specified offset
     */
     public function following(int $offset): int {}
    /**
     * Get last error code on the object
     */
     public function getErrorCode(): int {}
    /**
     * Get last error message on the object
     */
     public function getErrorMessage(): string {}
    public function getIterator(): \Iterator {}
    /**
     * Get the locale associated with the object
     */
     public function getLocale(int $type): string|false {}
    /**
     * Create iterator for navigating fragments between boundaries
     */
     public function getPartsIterator(string $type = IntlPartsIterator::KEY_SEQUENTIAL): \IntlPartsIterator {}
    /**
     * Get the text being scanned
     */
     public function getText(): ?string {}
    /**
     * Tell whether an offset is a boundaryʼs offset
     */
     public function isBoundary(int $offset): bool {}
    /**
     * Set the iterator position to index beyond the last character
     */
     public function last(): int {}
    /**
     * Advance the iterator the next boundary
     */
     public function next(?int $offset = NULL): int {}
    /**
     * Set the iterator position to the first boundary before an offset
     */
     public function preceding(int $offset): int {}
    /**
     * Set the iterator position to the boundary immediately before the current
     */
     public function previous(): int {}
    /**
     * Set the text being scanned
     */
     public function setText(string $text): bool {}
}

/**
 * The IntlCalendar class
 */
 class IntlCalendar {
    public const DOW_FRIDAY = 6;
    public const DOW_MONDAY = 2;
    public const DOW_SATURDAY = 7;
    public const DOW_SUNDAY = 1;
    public const DOW_THURSDAY = 5;
    public const DOW_TUESDAY = 3;
    public const DOW_TYPE_WEEKDAY = 0;
    public const DOW_TYPE_WEEKEND = 1;
    public const DOW_TYPE_WEEKEND_CEASE = 3;
    public const DOW_TYPE_WEEKEND_OFFSET = 2;
    public const DOW_WEDNESDAY = 4;
    public const FIELD_AM_PM = 9;
    public const FIELD_DATE = 5;
    public const FIELD_DAY_OF_MONTH = 5;
    public const FIELD_DAY_OF_WEEK = 7;
    public const FIELD_DAY_OF_WEEK_IN_MONTH = 8;
    public const FIELD_DAY_OF_YEAR = 6;
    public const FIELD_DOW_LOCAL = 18;
    public const FIELD_DST_OFFSET = 16;
    public const FIELD_ERA = 0;
    public const FIELD_EXTENDED_YEAR = 19;
    public const FIELD_FIELD_COUNT = 24;
    public const FIELD_HOUR = 10;
    public const FIELD_HOUR_OF_DAY = 11;
    public const FIELD_IS_LEAP_MONTH = 22;
    public const FIELD_JULIAN_DAY = 20;
    public const FIELD_MILLISECOND = 14;
    public const FIELD_MILLISECONDS_IN_DAY = 21;
    public const FIELD_MINUTE = 12;
    public const FIELD_MONTH = 2;
    public const FIELD_SECOND = 13;
    public const FIELD_WEEK_OF_MONTH = 4;
    public const FIELD_WEEK_OF_YEAR = 3;
    public const FIELD_YEAR = 1;
    public const FIELD_YEAR_WOY = 17;
    public const FIELD_ZONE_OFFSET = 15;
    public const WALLTIME_FIRST = 1;
    public const WALLTIME_LAST = 0;
    public const WALLTIME_NEXT_VALID = 2;
    /**
     * Private constructor for disallowing instantiation
     */
     private function __construct() {}
    /**
     * Add a (signed) amount of time to a field
     */
     public function add(int $field, int $value): bool {}
    /**
     * Whether this objectʼs time is after that of the passed object
     */
     public function after(\IntlCalendar $other): bool {}
    /**
     * Whether this objectʼs time is before that of the passed object
     */
     public function before(\IntlCalendar $other): bool {}
    /**
     * Clear a field or all fields
     */
     public function clear(?int $field = NULL): true {}
    /**
     * Create a new IntlCalendar
     */
     public static function createInstance(\IntlTimeZone|\DateTimeZone|string|null $timezone = NULL, ?string $locale = NULL): ?\IntlCalendar {}
    /**
     * Compare time of two IntlCalendar objects for equality
     */
     public function equals(\IntlCalendar $other): bool {}
    /**
     * Calculate difference between given time and this objectʼs time
     */
     public function fieldDifference(float $timestamp, int $field): int|false {}
    /**
     * Create an IntlCalendar from a DateTime object or string
     */
     public static function fromDateTime(\DateTime|string $datetime, ?string $locale = NULL): ?\IntlCalendar {}
    /**
     * Get the value for a field
     */
     public function get(int $field): int|false {}
    /**
     * The maximum value for a field, considering the objectʼs current time
     */
     public function getActualMaximum(int $field): int|false {}
    /**
     * The minimum value for a field, considering the objectʼs current time
     */
     public function getActualMinimum(int $field): int|false {}
    /**
     * Get array of locales for which there is data
     */
     public static function getAvailableLocales(): array {}
    /**
     * Tell whether a day is a weekday, weekend or a day that has a transition between the two
     */
     public function getDayOfWeekType(int $dayOfWeek): int|false {}
    /**
     * Get last error code on the object
     */
     public function getErrorCode(): int|false {}
    /**
     * Get last error message on the object
     */
     public function getErrorMessage(): string|false {}
    /**
     * Get the first day of the week for the calendarʼs locale
     */
     public function getFirstDayOfWeek(): int|false {}
    /**
     * Get the largest local minimum value for a field
     */
     public function getGreatestMinimum(int $field): int|false {}
    /**
     * Get set of locale keyword values
     */
     public static function getKeywordValuesForLocale(string $keyword, string $locale, bool $onlyCommon): \IntlIterator|false {}
    /**
     * Get the smallest local maximum for a field
     */
     public function getLeastMaximum(int $field): int|false {}
    /**
     * Get the locale associated with the object
     */
     public function getLocale(int $type): string|false {}
    /**
     * Get the global maximum value for a field
     */
     public function getMaximum(int $field): int|false {}
    /**
     * Get minimal number of days the first week in a year or month can have
     */
     public function getMinimalDaysInFirstWeek(): int|false {}
    /**
     * Get the global minimum value for a field
     */
     public function getMinimum(int $field): int|false {}
    /**
     * Get number representing the current time
     */
     public static function getNow(): float {}
    /**
     * Get behavior for handling repeating wall time
     */
     public function getRepeatedWallTimeOption(): int {}
    /**
     * Get behavior for handling skipped wall time
     */
     public function getSkippedWallTimeOption(): int {}
    /**
     * Get time currently represented by the object
     */
     public function getTime(): float|false {}
    /**
     * Get the objectʼs timezone
     */
     public function getTimeZone(): \IntlTimeZone|false {}
    /**
     * Get the calendar type
     */
     public function getType(): string {}
    /**
     * Get time of the day at which weekend begins or ends
     */
     public function getWeekendTransition(int $dayOfWeek): int|false {}
    /**
     * Whether the objectʼs time is in Daylight Savings Time
     */
     public function inDaylightTime(): bool {}
    /**
     * Whether another calendar is equal but for a different time
     */
     public function isEquivalentTo(\IntlCalendar $other): bool {}
    /**
     * Whether date/time interpretation is in lenient mode
     */
     public function isLenient(): bool {}
    /**
     * Whether a field is set
     */
     public function isSet(int $field): bool {}
    /**
     * Whether a certain date/time is in the weekend
     */
     public function isWeekend(?float $timestamp = NULL): bool {}
    /**
     * Add value to field without carrying into more significant fields
     */
     public function roll(int $field, $value): bool {}
    /**
     * Set a time field or several common fields at once
     */
     public function set(int $year, int $month, int $dayOfMonth = null, int $hour = null, int $minute = null, int $second = null): true {}
    /**
     * Set a date fields (PHP 8 >= 8.3.0)
     */
     public function setDate(int $year, int $month, int $dayOfMonth): void {}
    /**
     * Set a date and time fields (PHP 8 >= 8.3.0)
     */
     public function setDateTime(int $year, int $month, int $dayOfMonth, int $hour, int $minute, ?int $second = NULL): void {}
    /**
     * Set the day on which the week is deemed to start
     */
     public function setFirstDayOfWeek(int $dayOfWeek): true {}
    /**
     * Set whether date/time interpretation is to be lenient
     */
     public function setLenient(bool $lenient): true {}
    /**
     * Set minimal number of days the first week in a year or month can have
     */
     public function setMinimalDaysInFirstWeek(int $days): true {}
    /**
     * Set behavior for handling repeating wall times at negative timezone offset transitions
     */
     public function setRepeatedWallTimeOption(int $option): true {}
    /**
     * Set behavior for handling skipped wall times at positive timezone offset transitions
     */
     public function setSkippedWallTimeOption(int $option): true {}
    /**
     * Set the calendar time in milliseconds since the epoch
     */
     public function setTime(float $timestamp): bool {}
    /**
     * Set the timezone used by this calendar
     */
     public function setTimeZone(\IntlTimeZone|\DateTimeZone|string|null $timezone): bool {}
    /**
     * Convert an IntlCalendar into a DateTime object
     */
     public function toDateTime(): \DateTime|false {}
}

/**
 * IntlChar
 */
 class IntlChar {
    public const BLOCK_CODE_AEGEAN_NUMBERS = 119;
    public const BLOCK_CODE_ALCHEMICAL_SYMBOLS = 208;
    public const BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS = 80;
    public const BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION = 126;
    public const BLOCK_CODE_ANCIENT_GREEK_NUMBERS = 127;
    public const BLOCK_CODE_ANCIENT_SYMBOLS = 165;
    public const BLOCK_CODE_ARABIC = 12;
    public const BLOCK_CODE_ARABIC_EXTENDED_A = 210;
    public const BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = 211;
    public const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A = 81;
    public const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B = 85;
    public const BLOCK_CODE_ARABIC_SUPPLEMENT = 128;
    public const BLOCK_CODE_ARMENIAN = 10;
    public const BLOCK_CODE_ARROWS = 46;
    public const BLOCK_CODE_AVESTAN = 188;
    public const BLOCK_CODE_BALINESE = 147;
    public const BLOCK_CODE_BAMUM = 177;
    public const BLOCK_CODE_BAMUM_SUPPLEMENT = 202;
    public const BLOCK_CODE_BASIC_LATIN = 1;
    public const BLOCK_CODE_BASSA_VAH = 221;
    public const BLOCK_CODE_BATAK = 199;
    public const BLOCK_CODE_BENGALI = 16;
    public const BLOCK_CODE_BLOCK_ELEMENTS = 53;
    public const BLOCK_CODE_BOPOMOFO = 64;
    public const BLOCK_CODE_BOPOMOFO_EXTENDED = 67;
    public const BLOCK_CODE_BOX_DRAWING = 52;
    public const BLOCK_CODE_BRAHMI = 201;
    public const BLOCK_CODE_BRAILLE_PATTERNS = 57;
    public const BLOCK_CODE_BUGINESE = 129;
    public const BLOCK_CODE_BUHID = 100;
    public const BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS = 91;
    public const BLOCK_CODE_CARIAN = 168;
    public const BLOCK_CODE_CAUCASIAN_ALBANIAN = 222;
    public const BLOCK_CODE_CHAKMA = 212;
    public const BLOCK_CODE_CHAM = 164;
    public const BLOCK_CODE_CHEROKEE = 32;
    public const BLOCK_CODE_CJK_COMPATIBILITY = 69;
    public const BLOCK_CODE_CJK_COMPATIBILITY_FORMS = 83;
    public const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS = 79;
    public const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = 95;
    public const BLOCK_CODE_CJK_RADICALS_SUPPLEMENT = 58;
    public const BLOCK_CODE_CJK_STROKES = 130;
    public const BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION = 61;
    public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS = 71;
    public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = 70;
    public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = 94;
    public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = 197;
    public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = 209;
    public const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS = 7;
    public const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED = 224;
    public const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = 131;
    public const BLOCK_CODE_COMBINING_HALF_MARKS = 82;
    public const BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS = 43;
    public const BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS = 178;
    public const BLOCK_CODE_CONTROL_PICTURES = 49;
    public const BLOCK_CODE_COPTIC = 132;
    public const BLOCK_CODE_COPTIC_EPACT_NUMBERS = 223;
    public const BLOCK_CODE_COUNT = 339;
    public const BLOCK_CODE_COUNTING_ROD_NUMERALS = 154;
    public const BLOCK_CODE_CUNEIFORM = 152;
    public const BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION = 153;
    public const BLOCK_CODE_CURRENCY_SYMBOLS = 42;
    public const BLOCK_CODE_CYPRIOT_SYLLABARY = 123;
    public const BLOCK_CODE_CYRILLIC = 9;
    public const BLOCK_CODE_CYRILLIC_EXTENDED_A = 158;
    public const BLOCK_CODE_CYRILLIC_EXTENDED_B = 160;
    public const BLOCK_CODE_CYRILLIC_SUPPLEMENT = 97;
    public const BLOCK_CODE_CYRILLIC_SUPPLEMENTARY = 97;
    public const BLOCK_CODE_DESERET = 90;
    public const BLOCK_CODE_DEVANAGARI = 15;
    public const BLOCK_CODE_DEVANAGARI_EXTENDED = 179;
    public const BLOCK_CODE_DINGBATS = 56;
    public const BLOCK_CODE_DOMINO_TILES = 171;
    public const BLOCK_CODE_DUPLOYAN = 225;
    public const BLOCK_CODE_EGYPTIAN_HIEROGLYPHS = 194;
    public const BLOCK_CODE_ELBASAN = 226;
    public const BLOCK_CODE_EMOTICONS = 206;
    public const BLOCK_CODE_ENCLOSED_ALPHANUMERICS = 51;
    public const BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT = 195;
    public const BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS = 68;
    public const BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = 196;
    public const BLOCK_CODE_ETHIOPIC = 31;
    public const BLOCK_CODE_ETHIOPIC_EXTENDED = 133;
    public const BLOCK_CODE_ETHIOPIC_EXTENDED_A = 200;
    public const BLOCK_CODE_ETHIOPIC_SUPPLEMENT = 134;
    public const BLOCK_CODE_GENERAL_PUNCTUATION = 40;
    public const BLOCK_CODE_GEOMETRIC_SHAPES = 54;
    public const BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED = 227;
    public const BLOCK_CODE_GEORGIAN = 29;
    public const BLOCK_CODE_GEORGIAN_SUPPLEMENT = 135;
    public const BLOCK_CODE_GLAGOLITIC = 136;
    public const BLOCK_CODE_GOTHIC = 89;
    public const BLOCK_CODE_GRANTHA = 228;
    public const BLOCK_CODE_GREEK = 8;
    public const BLOCK_CODE_GREEK_EXTENDED = 39;
    public const BLOCK_CODE_GUJARATI = 18;
    public const BLOCK_CODE_GURMUKHI = 17;
    public const BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS = 87;
    public const BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO = 65;
    public const BLOCK_CODE_HANGUL_JAMO = 30;
    public const BLOCK_CODE_HANGUL_JAMO_EXTENDED_A = 180;
    public const BLOCK_CODE_HANGUL_JAMO_EXTENDED_B = 185;
    public const BLOCK_CODE_HANGUL_SYLLABLES = 74;
    public const BLOCK_CODE_HANUNOO = 99;
    public const BLOCK_CODE_HEBREW = 11;
    public const BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES = 76;
    public const BLOCK_CODE_HIGH_SURROGATES = 75;
    public const BLOCK_CODE_HIRAGANA = 62;
    public const BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS = 60;
    public const BLOCK_CODE_IMPERIAL_ARAMAIC = 186;
    public const BLOCK_CODE_INSCRIPTIONAL_PAHLAVI = 190;
    public const BLOCK_CODE_INSCRIPTIONAL_PARTHIAN = 189;
    public const BLOCK_CODE_INVALID_CODE = -1;
    public const BLOCK_CODE_IPA_EXTENSIONS = 5;
    public const BLOCK_CODE_JAVANESE = 181;
    public const BLOCK_CODE_KAITHI = 193;
    public const BLOCK_CODE_KANA_SUPPLEMENT = 203;
    public const BLOCK_CODE_KANBUN = 66;
    public const BLOCK_CODE_KANGXI_RADICALS = 59;
    public const BLOCK_CODE_KANNADA = 22;
    public const BLOCK_CODE_KATAKANA = 63;
    public const BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS = 107;
    public const BLOCK_CODE_KAYAH_LI = 162;
    public const BLOCK_CODE_KHAROSHTHI = 137;
    public const BLOCK_CODE_KHMER = 36;
    public const BLOCK_CODE_KHMER_SYMBOLS = 113;
    public const BLOCK_CODE_KHOJKI = 229;
    public const BLOCK_CODE_KHUDAWADI = 230;
    public const BLOCK_CODE_LAO = 26;
    public const BLOCK_CODE_LATIN_1_SUPPLEMENT = 2;
    public const BLOCK_CODE_LATIN_EXTENDED_A = 3;
    public const BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL = 38;
    public const BLOCK_CODE_LATIN_EXTENDED_B = 4;
    public const BLOCK_CODE_LATIN_EXTENDED_C = 148;
    public const BLOCK_CODE_LATIN_EXTENDED_D = 149;
    public const BLOCK_CODE_LATIN_EXTENDED_E = 231;
    public const BLOCK_CODE_LEPCHA = 156;
    public const BLOCK_CODE_LETTERLIKE_SYMBOLS = 44;
    public const BLOCK_CODE_LIMBU = 111;
    public const BLOCK_CODE_LINEAR_A = 232;
    public const BLOCK_CODE_LINEAR_B_IDEOGRAMS = 118;
    public const BLOCK_CODE_LINEAR_B_SYLLABARY = 117;
    public const BLOCK_CODE_LISU = 176;
    public const BLOCK_CODE_LOW_SURROGATES = 77;
    public const BLOCK_CODE_LYCIAN = 167;
    public const BLOCK_CODE_LYDIAN = 169;
    public const BLOCK_CODE_MAHAJANI = 233;
    public const BLOCK_CODE_MAHJONG_TILES = 170;
    public const BLOCK_CODE_MALAYALAM = 23;
    public const BLOCK_CODE_MANDAIC = 198;
    public const BLOCK_CODE_MANICHAEAN = 234;
    public const BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS = 93;
    public const BLOCK_CODE_MATHEMATICAL_OPERATORS = 47;
    public const BLOCK_CODE_MEETEI_MAYEK = 184;
    public const BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS = 213;
    public const BLOCK_CODE_MENDE_KIKAKUI = 235;
    public const BLOCK_CODE_MEROITIC_CURSIVE = 214;
    public const BLOCK_CODE_MEROITIC_HIEROGLYPHS = 215;
    public const BLOCK_CODE_MIAO = 216;
    public const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = 102;
    public const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = 105;
    public const BLOCK_CODE_MISCELLANEOUS_SYMBOLS = 55;
    public const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS = 115;
    public const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = 205;
    public const BLOCK_CODE_MISCELLANEOUS_TECHNICAL = 48;
    public const BLOCK_CODE_MODI = 236;
    public const BLOCK_CODE_MODIFIER_TONE_LETTERS = 138;
    public const BLOCK_CODE_MONGOLIAN = 37;
    public const BLOCK_CODE_MRO = 237;
    public const BLOCK_CODE_MUSICAL_SYMBOLS = 92;
    public const BLOCK_CODE_MYANMAR = 28;
    public const BLOCK_CODE_MYANMAR_EXTENDED_A = 182;
    public const BLOCK_CODE_MYANMAR_EXTENDED_B = 238;
    public const BLOCK_CODE_NABATAEAN = 239;
    public const BLOCK_CODE_NEW_TAI_LUE = 139;
    public const BLOCK_CODE_NKO = 146;
    public const BLOCK_CODE_NO_BLOCK = 0;
    public const BLOCK_CODE_NUMBER_FORMS = 45;
    public const BLOCK_CODE_OGHAM = 34;
    public const BLOCK_CODE_OLD_ITALIC = 88;
    public const BLOCK_CODE_OLD_NORTH_ARABIAN = 240;
    public const BLOCK_CODE_OLD_PERMIC = 241;
    public const BLOCK_CODE_OLD_PERSIAN = 140;
    public const BLOCK_CODE_OLD_SOUTH_ARABIAN = 187;
    public const BLOCK_CODE_OLD_TURKIC = 191;
    public const BLOCK_CODE_OL_CHIKI = 157;
    public const BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION = 50;
    public const BLOCK_CODE_ORIYA = 19;
    public const BLOCK_CODE_ORNAMENTAL_DINGBATS = 242;
    public const BLOCK_CODE_OSMANYA = 122;
    public const BLOCK_CODE_PAHAWH_HMONG = 243;
    public const BLOCK_CODE_PALMYRENE = 244;
    public const BLOCK_CODE_PAU_CIN_HAU = 245;
    public const BLOCK_CODE_PHAGS_PA = 150;
    public const BLOCK_CODE_PHAISTOS_DISC = 166;
    public const BLOCK_CODE_PHOENICIAN = 151;
    public const BLOCK_CODE_PHONETIC_EXTENSIONS = 114;
    public const BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT = 141;
    public const BLOCK_CODE_PLAYING_CARDS = 204;
    public const BLOCK_CODE_PRIVATE_USE = 78;
    public const BLOCK_CODE_PRIVATE_USE_AREA = 78;
    public const BLOCK_CODE_PSALTER_PAHLAVI = 246;
    public const BLOCK_CODE_REJANG = 163;
    public const BLOCK_CODE_RUMI_NUMERAL_SYMBOLS = 192;
    public const BLOCK_CODE_RUNIC = 35;
    public const BLOCK_CODE_SAMARITAN = 172;
    public const BLOCK_CODE_SAURASHTRA = 161;
    public const BLOCK_CODE_SHARADA = 217;
    public const BLOCK_CODE_SHAVIAN = 121;
    public const BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS = 247;
    public const BLOCK_CODE_SIDDHAM = 248;
    public const BLOCK_CODE_SINHALA = 24;
    public const BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS = 249;
    public const BLOCK_CODE_SMALL_FORM_VARIANTS = 84;
    public const BLOCK_CODE_SORA_SOMPENG = 218;
    public const BLOCK_CODE_SPACING_MODIFIER_LETTERS = 6;
    public const BLOCK_CODE_SPECIALS = 86;
    public const BLOCK_CODE_SUNDANESE = 155;
    public const BLOCK_CODE_SUNDANESE_SUPPLEMENT = 219;
    public const BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS = 41;
    public const BLOCK_CODE_SUPPLEMENTAL_ARROWS_A = 103;
    public const BLOCK_CODE_SUPPLEMENTAL_ARROWS_B = 104;
    public const BLOCK_CODE_SUPPLEMENTAL_ARROWS_C = 250;
    public const BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS = 106;
    public const BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION = 142;
    public const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A = 109;
    public const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B = 110;
    public const BLOCK_CODE_SYLOTI_NAGRI = 143;
    public const BLOCK_CODE_SYRIAC = 13;
    public const BLOCK_CODE_TAGALOG = 98;
    public const BLOCK_CODE_TAGBANWA = 101;
    public const BLOCK_CODE_TAGS = 96;
    public const BLOCK_CODE_TAI_LE = 112;
    public const BLOCK_CODE_TAI_THAM = 174;
    public const BLOCK_CODE_TAI_VIET = 183;
    public const BLOCK_CODE_TAI_XUAN_JING_SYMBOLS = 124;
    public const BLOCK_CODE_TAKRI = 220;
    public const BLOCK_CODE_TAMIL = 20;
    public const BLOCK_CODE_TELUGU = 21;
    public const BLOCK_CODE_THAANA = 14;
    public const BLOCK_CODE_THAI = 25;
    public const BLOCK_CODE_TIBETAN = 27;
    public const BLOCK_CODE_TIFINAGH = 144;
    public const BLOCK_CODE_TIRHUTA = 251;
    public const BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS = 207;
    public const BLOCK_CODE_UGARITIC = 120;
    public const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = 33;
    public const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = 173;
    public const BLOCK_CODE_VAI = 159;
    public const BLOCK_CODE_VARIATION_SELECTORS = 108;
    public const BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT = 125;
    public const BLOCK_CODE_VEDIC_EXTENSIONS = 175;
    public const BLOCK_CODE_VERTICAL_FORMS = 145;
    public const BLOCK_CODE_WARANG_CITI = 252;
    public const BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS = 116;
    public const BLOCK_CODE_YI_RADICALS = 73;
    public const BLOCK_CODE_YI_SYLLABLES = 72;
    public const BPT_CLOSE = 2;
    public const BPT_COUNT = 3;
    public const BPT_NONE = 0;
    public const BPT_OPEN = 1;
    public const CHAR_CATEGORY_CHAR_CATEGORY_COUNT = 30;
    public const CHAR_CATEGORY_COMBINING_SPACING_MARK = 8;
    public const CHAR_CATEGORY_CONNECTOR_PUNCTUATION = 22;
    public const CHAR_CATEGORY_CONTROL_CHAR = 15;
    public const CHAR_CATEGORY_CURRENCY_SYMBOL = 25;
    public const CHAR_CATEGORY_DASH_PUNCTUATION = 19;
    public const CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER = 9;
    public const CHAR_CATEGORY_ENCLOSING_MARK = 7;
    public const CHAR_CATEGORY_END_PUNCTUATION = 21;
    public const CHAR_CATEGORY_FINAL_PUNCTUATION = 29;
    public const CHAR_CATEGORY_FORMAT_CHAR = 16;
    public const CHAR_CATEGORY_GENERAL_OTHER_TYPES = 0;
    public const CHAR_CATEGORY_INITIAL_PUNCTUATION = 28;
    public const CHAR_CATEGORY_LETTER_NUMBER = 10;
    public const CHAR_CATEGORY_LINE_SEPARATOR = 13;
    public const CHAR_CATEGORY_LOWERCASE_LETTER = 2;
    public const CHAR_CATEGORY_MATH_SYMBOL = 24;
    public const CHAR_CATEGORY_MODIFIER_LETTER = 4;
    public const CHAR_CATEGORY_MODIFIER_SYMBOL = 26;
    public const CHAR_CATEGORY_NON_SPACING_MARK = 6;
    public const CHAR_CATEGORY_OTHER_LETTER = 5;
    public const CHAR_CATEGORY_OTHER_NUMBER = 11;
    public const CHAR_CATEGORY_OTHER_PUNCTUATION = 23;
    public const CHAR_CATEGORY_OTHER_SYMBOL = 27;
    public const CHAR_CATEGORY_PARAGRAPH_SEPARATOR = 14;
    public const CHAR_CATEGORY_PRIVATE_USE_CHAR = 17;
    public const CHAR_CATEGORY_SPACE_SEPARATOR = 12;
    public const CHAR_CATEGORY_START_PUNCTUATION = 20;
    public const CHAR_CATEGORY_SURROGATE = 18;
    public const CHAR_CATEGORY_TITLECASE_LETTER = 3;
    public const CHAR_CATEGORY_UNASSIGNED = 0;
    public const CHAR_CATEGORY_UPPERCASE_LETTER = 1;
    public const CHAR_DIRECTION_ARABIC_NUMBER = 5;
    public const CHAR_DIRECTION_BLOCK_SEPARATOR = 7;
    public const CHAR_DIRECTION_BOUNDARY_NEUTRAL = 18;
    public const CHAR_DIRECTION_CHAR_DIRECTION_COUNT = 23;
    public const CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR = 6;
    public const CHAR_DIRECTION_DIR_NON_SPACING_MARK = 17;
    public const CHAR_DIRECTION_EUROPEAN_NUMBER = 2;
    public const CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR = 3;
    public const CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR = 4;
    public const CHAR_DIRECTION_FIRST_STRONG_ISOLATE = 19;
    public const CHAR_DIRECTION_LEFT_TO_RIGHT = 0;
    public const CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING = 11;
    public const CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE = 20;
    public const CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE = 12;
    public const CHAR_DIRECTION_OTHER_NEUTRAL = 10;
    public const CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT = 16;
    public const CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE = 22;
    public const CHAR_DIRECTION_RIGHT_TO_LEFT = 1;
    public const CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC = 13;
    public const CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING = 14;
    public const CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE = 21;
    public const CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE = 15;
    public const CHAR_DIRECTION_SEGMENT_SEPARATOR = 8;
    public const CHAR_DIRECTION_WHITE_SPACE_NEUTRAL = 9;
    public const CHAR_NAME_ALIAS = 3;
    public const CHAR_NAME_CHOICE_COUNT = 4;
    public const CODEPOINT_MAX = 1114111;
    public const CODEPOINT_MIN = 0;
    public const DT_CANONICAL = 1;
    public const DT_CIRCLE = 3;
    public const DT_COMPAT = 2;
    public const DT_COUNT = 18;
    public const DT_FINAL = 4;
    public const DT_FONT = 5;
    public const DT_FRACTION = 6;
    public const DT_INITIAL = 7;
    public const DT_ISOLATED = 8;
    public const DT_MEDIAL = 9;
    public const DT_NARROW = 10;
    public const DT_NOBREAK = 11;
    public const DT_NONE = 0;
    public const DT_SMALL = 12;
    public const DT_SQUARE = 13;
    public const DT_SUB = 14;
    public const DT_SUPER = 15;
    public const DT_VERTICAL = 16;
    public const DT_WIDE = 17;
    public const EA_AMBIGUOUS = 1;
    public const EA_COUNT = 6;
    public const EA_FULLWIDTH = 3;
    public const EA_HALFWIDTH = 2;
    public const EA_NARROW = 4;
    public const EA_NEUTRAL = 0;
    public const EA_WIDE = 5;
    public const EXTENDED_CHAR_NAME = 2;
    public const FOLD_CASE_DEFAULT = 0;
    public const FOLD_CASE_EXCLUDE_SPECIAL_I = 1;
    public const GCB_CONTROL = 1;
    public const GCB_COUNT = 18;
    public const GCB_CR = 2;
    public const GCB_EXTEND = 3;
    public const GCB_L = 4;
    public const GCB_LF = 5;
    public const GCB_LV = 6;
    public const GCB_LVT = 7;
    public const GCB_OTHER = 0;
    public const GCB_PREPEND = 11;
    public const GCB_REGIONAL_INDICATOR = 12;
    public const GCB_SPACING_MARK = 10;
    public const GCB_T = 8;
    public const GCB_V = 9;
    public const HST_COUNT = 6;
    public const HST_LEADING_JAMO = 1;
    public const HST_LVT_SYLLABLE = 5;
    public const HST_LV_SYLLABLE = 4;
    public const HST_NOT_APPLICABLE = 0;
    public const HST_TRAILING_JAMO = 3;
    public const HST_VOWEL_JAMO = 2;
    public const JG_AIN = 1;
    public const JG_ALAPH = 2;
    public const JG_ALEF = 3;
    public const JG_BEH = 4;
    public const JG_BETH = 5;
    public const JG_BURUSHASKI_YEH_BARREE = 54;
    public const JG_COUNT = 105;
    public const JG_DAL = 6;
    public const JG_DALATH_RISH = 7;
    public const JG_E = 8;
    public const JG_FARSI_YEH = 55;
    public const JG_FE = 51;
    public const JG_FEH = 9;
    public const JG_FINAL_SEMKATH = 10;
    public const JG_GAF = 11;
    public const JG_GAMAL = 12;
    public const JG_HAH = 13;
    public const JG_HAMZA_ON_HEH_GOAL = 14;
    public const JG_HE = 15;
    public const JG_HEH = 16;
    public const JG_HEH_GOAL = 17;
    public const JG_HETH = 18;
    public const JG_KAF = 19;
    public const JG_KAPH = 20;
    public const JG_KHAPH = 52;
    public const JG_KNOTTED_HEH = 21;
    public const JG_LAM = 22;
    public const JG_LAMADH = 23;
    public const JG_MANICHAEAN_ALEPH = 58;
    public const JG_MANICHAEAN_AYIN = 59;
    public const JG_MANICHAEAN_BETH = 60;
    public const JG_MANICHAEAN_DALETH = 61;
    public const JG_MANICHAEAN_DHAMEDH = 62;
    public const JG_MANICHAEAN_FIVE = 63;
    public const JG_MANICHAEAN_GIMEL = 64;
    public const JG_MANICHAEAN_HETH = 65;
    public const JG_MANICHAEAN_HUNDRED = 66;
    public const JG_MANICHAEAN_KAPH = 67;
    public const JG_MANICHAEAN_LAMEDH = 68;
    public const JG_MANICHAEAN_MEM = 69;
    public const JG_MANICHAEAN_NUN = 70;
    public const JG_MANICHAEAN_ONE = 71;
    public const JG_MANICHAEAN_PE = 72;
    public const JG_MANICHAEAN_QOPH = 73;
    public const JG_MANICHAEAN_RESH = 74;
    public const JG_MANICHAEAN_SADHE = 75;
    public const JG_MANICHAEAN_SAMEKH = 76;
    public const JG_MANICHAEAN_TAW = 77;
    public const JG_MANICHAEAN_TEN = 78;
    public const JG_MANICHAEAN_TETH = 79;
    public const JG_MANICHAEAN_THAMEDH = 80;
    public const JG_MANICHAEAN_TWENTY = 81;
    public const JG_MANICHAEAN_WAW = 82;
    public const JG_MANICHAEAN_YODH = 83;
    public const JG_MANICHAEAN_ZAYIN = 84;
    public const JG_MEEM = 24;
    public const JG_MIM = 25;
    public const JG_NOON = 26;
    public const JG_NO_JOINING_GROUP = 0;
    public const JG_NUN = 27;
    public const JG_NYA = 56;
    public const JG_PE = 28;
    public const JG_QAF = 29;
    public const JG_QAPH = 30;
    public const JG_REH = 31;
    public const JG_REVERSED_PE = 32;
    public const JG_ROHINGYA_YEH = 57;
    public const JG_SAD = 33;
    public const JG_SADHE = 34;
    public const JG_SEEN = 35;
    public const JG_SEMKATH = 36;
    public const JG_SHIN = 37;
    public const JG_STRAIGHT_WAW = 85;
    public const JG_SWASH_KAF = 38;
    public const JG_SYRIAC_WAW = 39;
    public const JG_TAH = 40;
    public const JG_TAW = 41;
    public const JG_TEH_MARBUTA = 42;
    public const JG_TEH_MARBUTA_GOAL = 14;
    public const JG_TETH = 43;
    public const JG_WAW = 44;
    public const JG_YEH = 45;
    public const JG_YEH_BARREE = 46;
    public const JG_YEH_WITH_TAIL = 47;
    public const JG_YUDH = 48;
    public const JG_YUDH_HE = 49;
    public const JG_ZAIN = 50;
    public const JG_ZHAIN = 53;
    public const JT_COUNT = 6;
    public const JT_DUAL_JOINING = 2;
    public const JT_JOIN_CAUSING = 1;
    public const JT_LEFT_JOINING = 3;
    public const JT_NON_JOINING = 0;
    public const JT_RIGHT_JOINING = 4;
    public const JT_TRANSPARENT = 5;
    public const LB_ALPHABETIC = 2;
    public const LB_AMBIGUOUS = 1;
    public const LB_BREAK_AFTER = 4;
    public const LB_BREAK_BEFORE = 5;
    public const LB_BREAK_BOTH = 3;
    public const LB_BREAK_SYMBOLS = 27;
    public const LB_CARRIAGE_RETURN = 10;
    public const LB_CLOSE_PARENTHESIS = 36;
    public const LB_CLOSE_PUNCTUATION = 8;
    public const LB_COMBINING_MARK = 9;
    public const LB_COMPLEX_CONTEXT = 24;
    public const LB_CONDITIONAL_JAPANESE_STARTER = 37;
    public const LB_CONTINGENT_BREAK = 7;
    public const LB_COUNT = 48;
    public const LB_EXCLAMATION = 11;
    public const LB_GLUE = 12;
    public const LB_H2 = 31;
    public const LB_H3 = 32;
    public const LB_HEBREW_LETTER = 38;
    public const LB_HYPHEN = 13;
    public const LB_IDEOGRAPHIC = 14;
    public const LB_INFIX_NUMERIC = 16;
    public const LB_INSEPARABLE = 15;
    public const LB_INSEPERABLE = 15;
    public const LB_JL = 33;
    public const LB_JT = 34;
    public const LB_JV = 35;
    public const LB_LINE_FEED = 17;
    public const LB_MANDATORY_BREAK = 6;
    public const LB_NEXT_LINE = 29;
    public const LB_NONSTARTER = 18;
    public const LB_NUMERIC = 19;
    public const LB_OPEN_PUNCTUATION = 20;
    public const LB_POSTFIX_NUMERIC = 21;
    public const LB_PREFIX_NUMERIC = 22;
    public const LB_QUOTATION = 23;
    public const LB_REGIONAL_INDICATOR = 39;
    public const LB_SPACE = 26;
    public const LB_SURROGATE = 25;
    public const LB_UNKNOWN = 0;
    public const LB_WORD_JOINER = 30;
    public const LB_ZWSPACE = 28;
    public const LONG_PROPERTY_NAME = 1;
    public const NO_NUMERIC_VALUE = -123456789.0;
    public const NT_COUNT = 4;
    public const NT_DECIMAL = 1;
    public const NT_DIGIT = 2;
    public const NT_NONE = 0;
    public const NT_NUMERIC = 3;
    public const PROPERTY_AGE = 16384;
    public const PROPERTY_ALPHABETIC = 0;
    public const PROPERTY_ASCII_HEX_DIGIT = 1;
    public const PROPERTY_BIDI_CLASS = 4096;
    public const PROPERTY_BIDI_CONTROL = 2;
    public const PROPERTY_BIDI_MIRRORED = 3;
    public const PROPERTY_BIDI_MIRRORING_GLYPH = 16385;
    public const PROPERTY_BIDI_PAIRED_BRACKET = 16397;
    public const PROPERTY_BIDI_PAIRED_BRACKET_TYPE = 4117;
    public const PROPERTY_BINARY_LIMIT = 76;
    public const PROPERTY_BINARY_START = 0;
    public const PROPERTY_BLOCK = 4097;
    public const PROPERTY_CANONICAL_COMBINING_CLASS = 4098;
    public const PROPERTY_CASED = 49;
    public const PROPERTY_CASE_FOLDING = 16386;
    public const PROPERTY_CASE_IGNORABLE = 50;
    public const PROPERTY_CASE_SENSITIVE = 34;
    public const PROPERTY_CHANGES_WHEN_CASEFOLDED = 54;
    public const PROPERTY_CHANGES_WHEN_CASEMAPPED = 55;
    public const PROPERTY_CHANGES_WHEN_LOWERCASED = 51;
    public const PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED = 56;
    public const PROPERTY_CHANGES_WHEN_TITLECASED = 53;
    public const PROPERTY_CHANGES_WHEN_UPPERCASED = 52;
    public const PROPERTY_DASH = 4;
    public const PROPERTY_DECOMPOSITION_TYPE = 4099;
    public const PROPERTY_DEFAULT_IGNORABLE_CODE_POINT = 5;
    public const PROPERTY_DEPRECATED = 6;
    public const PROPERTY_DIACRITIC = 7;
    public const PROPERTY_DOUBLE_LIMIT = 12289;
    public const PROPERTY_DOUBLE_START = 12288;
    public const PROPERTY_EAST_ASIAN_WIDTH = 4100;
    public const PROPERTY_EXTENDER = 8;
    public const PROPERTY_FULL_COMPOSITION_EXCLUSION = 9;
    public const PROPERTY_GENERAL_CATEGORY = 4101;
    public const PROPERTY_GENERAL_CATEGORY_MASK = 8192;
    public const PROPERTY_GRAPHEME_BASE = 10;
    public const PROPERTY_GRAPHEME_CLUSTER_BREAK = 4114;
    public const PROPERTY_GRAPHEME_EXTEND = 11;
    public const PROPERTY_GRAPHEME_LINK = 12;
    public const PROPERTY_HANGUL_SYLLABLE_TYPE = 4107;
    public const PROPERTY_HEX_DIGIT = 13;
    public const PROPERTY_HYPHEN = 14;
    public const PROPERTY_IDEOGRAPHIC = 17;
    public const PROPERTY_IDS_BINARY_OPERATOR = 18;
    public const PROPERTY_IDS_TRINARY_OPERATOR = 19;
    public const PROPERTY_IDS_UNARY_OPERATOR = 72;
    public const PROPERTY_ID_COMPAT_MATH_CONTINUE = 74;
    public const PROPERTY_ID_COMPAT_MATH_START = 73;
    public const PROPERTY_ID_CONTINUE = 15;
    public const PROPERTY_ID_START = 16;
    public const PROPERTY_INT_LIMIT = 4123;
    public const PROPERTY_INT_START = 4096;
    public const PROPERTY_INVALID_CODE = -1;
    public const PROPERTY_ISO_COMMENT = 16387;
    public const PROPERTY_JOINING_GROUP = 4102;
    public const PROPERTY_JOINING_TYPE = 4103;
    public const PROPERTY_JOIN_CONTROL = 20;
    public const PROPERTY_LEAD_CANONICAL_COMBINING_CLASS = 4112;
    public const PROPERTY_LINE_BREAK = 4104;
    public const PROPERTY_LOGICAL_ORDER_EXCEPTION = 21;
    public const PROPERTY_LOWERCASE = 22;
    public const PROPERTY_LOWERCASE_MAPPING = 16388;
    public const PROPERTY_MASK_LIMIT = 8193;
    public const PROPERTY_MASK_START = 8192;
    public const PROPERTY_MATH = 23;
    public const PROPERTY_NAME = 16389;
    public const PROPERTY_NAME_CHOICE_COUNT = 2;
    public const PROPERTY_NFC_INERT = 39;
    public const PROPERTY_NFC_QUICK_CHECK = 4110;
    public const PROPERTY_NFD_INERT = 37;
    public const PROPERTY_NFD_QUICK_CHECK = 4108;
    public const PROPERTY_NFKC_INERT = 40;
    public const PROPERTY_NFKC_QUICK_CHECK = 4111;
    public const PROPERTY_NFKD_INERT = 38;
    public const PROPERTY_NFKD_QUICK_CHECK = 4109;
    public const PROPERTY_NONCHARACTER_CODE_POINT = 24;
    public const PROPERTY_NUMERIC_TYPE = 4105;
    public const PROPERTY_NUMERIC_VALUE = 12288;
    public const PROPERTY_OTHER_PROPERTY_LIMIT = 28674;
    public const PROPERTY_OTHER_PROPERTY_START = 28672;
    public const PROPERTY_PATTERN_SYNTAX = 42;
    public const PROPERTY_PATTERN_WHITE_SPACE = 43;
    public const PROPERTY_POSIX_ALNUM = 44;
    public const PROPERTY_POSIX_BLANK = 45;
    public const PROPERTY_POSIX_GRAPH = 46;
    public const PROPERTY_POSIX_PRINT = 47;
    public const PROPERTY_POSIX_XDIGIT = 48;
    public const PROPERTY_QUOTATION_MARK = 25;
    public const PROPERTY_RADICAL = 26;
    public const PROPERTY_SCRIPT = 4106;
    public const PROPERTY_SCRIPT_EXTENSIONS = 28672;
    public const PROPERTY_SEGMENT_STARTER = 41;
    public const PROPERTY_SENTENCE_BREAK = 4115;
    public const PROPERTY_SIMPLE_CASE_FOLDING = 16390;
    public const PROPERTY_SIMPLE_LOWERCASE_MAPPING = 16391;
    public const PROPERTY_SIMPLE_TITLECASE_MAPPING = 16392;
    public const PROPERTY_SIMPLE_UPPERCASE_MAPPING = 16393;
    public const PROPERTY_SOFT_DOTTED = 27;
    public const PROPERTY_STRING_LIMIT = 16398;
    public const PROPERTY_STRING_START = 16384;
    public const PROPERTY_S_TERM = 35;
    public const PROPERTY_TERMINAL_PUNCTUATION = 28;
    public const PROPERTY_TITLECASE_MAPPING = 16394;
    public const PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS = 4113;
    public const PROPERTY_UNICODE_1_NAME = 16395;
    public const PROPERTY_UNIFIED_IDEOGRAPH = 29;
    public const PROPERTY_UPPERCASE = 30;
    public const PROPERTY_UPPERCASE_MAPPING = 16396;
    public const PROPERTY_VARIATION_SELECTOR = 36;
    public const PROPERTY_WHITE_SPACE = 31;
    public const PROPERTY_WORD_BREAK = 4116;
    public const PROPERTY_XID_CONTINUE = 32;
    public const PROPERTY_XID_START = 33;
    public const SB_ATERM = 1;
    public const SB_CLOSE = 2;
    public const SB_COUNT = 15;
    public const SB_CR = 11;
    public const SB_EXTEND = 12;
    public const SB_FORMAT = 3;
    public const SB_LF = 13;
    public const SB_LOWER = 4;
    public const SB_NUMERIC = 5;
    public const SB_OLETTER = 6;
    public const SB_OTHER = 0;
    public const SB_SCONTINUE = 14;
    public const SB_SEP = 7;
    public const SB_SP = 8;
    public const SB_STERM = 9;
    public const SB_UPPER = 10;
    public const SHORT_PROPERTY_NAME = 0;
    public const UNICODE_10_CHAR_NAME = 1;
    public const UNICODE_CHAR_NAME = 0;
    public const UNICODE_VERSION = "16.0";
    public const WB_ALETTER = 1;
    public const WB_COUNT = 23;
    public const WB_CR = 8;
    public const WB_DOUBLE_QUOTE = 16;
    public const WB_EXTEND = 9;
    public const WB_EXTENDNUMLET = 7;
    public const WB_FORMAT = 2;
    public const WB_HEBREW_LETTER = 14;
    public const WB_KATAKANA = 3;
    public const WB_LF = 10;
    public const WB_MIDLETTER = 4;
    public const WB_MIDNUM = 5;
    public const WB_MIDNUMLET = 11;
    public const WB_NEWLINE = 12;
    public const WB_NUMERIC = 6;
    public const WB_OTHER = 0;
    public const WB_REGIONAL_INDICATOR = 13;
    public const WB_SINGLE_QUOTE = 15;
    /**
     * Get the &quot;age&quot; of the code point
     */
     public static function charAge(string|int $codepoint): ?array {}
    /**
     * Get the decimal digit value of a decimal digit character
     */
     public static function charDigitValue(string|int $codepoint): ?int {}
    /**
     * Get bidirectional category value for a code point
     */
     public static function charDirection(string|int $codepoint): ?int {}
    /**
     * Find Unicode character by name and return its code point value
     */
     public static function charFromName(string $name, int $type = IntlChar::UNICODE_CHAR_NAME): ?int {}
    /**
     * Get the &quot;mirror-image&quot; character for a code point
     */
     public static function charMirror(string|int $codepoint): string|int|null {}
    /**
     * Retrieve the name of a Unicode character
     */
     public static function charName(string|int $codepoint, int $type = IntlChar::UNICODE_CHAR_NAME): ?string {}
    /**
     * Get the general category value for a code point
     */
     public static function charType(string|int $codepoint): ?int {}
    /**
     * Return Unicode character by code point value
     */
     public static function chr(string|int $codepoint): ?string {}
    /**
     * Get the decimal digit value of a code point for a given radix
     */
     public static function digit(string|int $codepoint, int $base = 10): int|false|null {}
    /**
     * Enumerate all assigned Unicode characters within a range
     */
     public static function enumCharNames(string|int $start, string|int $end, callable $callback, int $type = IntlChar::UNICODE_CHAR_NAME): bool {}
    /**
     * Enumerate all code points with their Unicode general categories
     */
     public static function enumCharTypes(callable $callback): void {}
    /**
     * Perform case folding on a code point
     */
     public static function foldCase(string|int $codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT): string|int|null {}
    /**
     * Get character representation for a given digit and radix
     */
     public static function forDigit(int $digit, int $base = 10): int {}
    /**
     * Get the paired bracket character for a code point
     */
     public static function getBidiPairedBracket(string|int $codepoint): string|int|null {}
    /**
     * Get the Unicode allocation block containing a code point
     */
     public static function getBlockCode(string|int $codepoint): ?int {}
    /**
     * Get the combining class of a code point
     */
     public static function getCombiningClass(string|int $codepoint): ?int {}
    /**
     * Get the FC_NFKC_Closure property for a code point
     */
     public static function getFC_NFKC_Closure(string|int $codepoint): string|false|null {}
    /**
     * Get the max value for a Unicode property
     */
     public static function getIntPropertyMaxValue(int $property): int {}
    /**
     * Get the min value for a Unicode property
     */
     public static function getIntPropertyMinValue(int $property): int {}
    /**
     * Get the value for a Unicode property for a code point
     */
     public static function getIntPropertyValue(string|int $codepoint, int $property): ?int {}
    /**
     * Get the numeric value for a Unicode code point
     */
     public static function getNumericValue(string|int $codepoint): ?float {}
    /**
     * Get the property constant value for a given property name
     */
     public static function getPropertyEnum(string $alias): int {}
    /**
     * Get the Unicode name for a property
     */
     public static function getPropertyName(int $property, int $type = IntlChar::LONG_PROPERTY_NAME): string|false {}
    /**
     * Get the property value for a given value name
     */
     public static function getPropertyValueEnum(int $property, string $name): int {}
    /**
     * Get the Unicode name for a property value
     */
     public static function getPropertyValueName(int $property, int $value, int $type = IntlChar::LONG_PROPERTY_NAME): string|false {}
    /**
     * Get the Unicode version
     */
     public static function getUnicodeVersion(): array {}
    /**
     * Check a binary Unicode property for a code point
     */
     public static function hasBinaryProperty(string|int $codepoint, int $property): ?bool {}
    /**
     * Check if code point is an ignorable character
     */
     public static function isIDIgnorable(string|int $codepoint): ?bool {}
    /**
     * Check if code point is permissible in an identifier
     */
     public static function isIDPart(string|int $codepoint): ?bool {}
    /**
     * Check if code point is permissible as the first character in an identifier
     */
     public static function isIDStart(string|int $codepoint): ?bool {}
    /**
     * Check if code point is an ISO control code
     */
     public static function isISOControl(string|int $codepoint): ?bool {}
    /**
     * Check if code point is permissible in a Java identifier
     */
     public static function isJavaIDPart(string|int $codepoint): ?bool {}
    /**
     * Check if code point is permissible as the first character in a Java identifier
     */
     public static function isJavaIDStart(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a space character according to Java
     */
     public static function isJavaSpaceChar(string|int $codepoint): ?bool {}
    /**
     * Check if code point has the Bidi_Mirrored property
     */
     public static function isMirrored(string|int $codepoint): ?bool {}
    /**
     * Check if code point has the Alphabetic Unicode property
     */
     public static function isUAlphabetic(string|int $codepoint): ?bool {}
    /**
     * Check if code point has the Lowercase Unicode property
     */
     public static function isULowercase(string|int $codepoint): ?bool {}
    /**
     * Check if code point has the Uppercase Unicode property
     */
     public static function isUUppercase(string|int $codepoint): ?bool {}
    /**
     * Check if code point has the White_Space Unicode property
     */
     public static function isUWhiteSpace(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a whitespace character according to ICU
     */
     public static function isWhitespace(string|int $codepoint): ?bool {}
    /**
     * Check if code point is an alphanumeric character
     */
     public static function isalnum(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a letter character
     */
     public static function isalpha(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a base character
     */
     public static function isbase(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a &quot;blank&quot; or &quot;horizontal space&quot; character
     */
     public static function isblank(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a control character
     */
     public static function iscntrl(string|int $codepoint): ?bool {}
    /**
     * Check whether the code point is defined
     */
     public static function isdefined(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a digit character
     */
     public static function isdigit(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a graphic character
     */
     public static function isgraph(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a lowercase letter
     */
     public static function islower(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a printable character
     */
     public static function isprint(string|int $codepoint): ?bool {}
    /**
     * Check if code point is punctuation character
     */
     public static function ispunct(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a space character
     */
     public static function isspace(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a titlecase letter
     */
     public static function istitle(string|int $codepoint): ?bool {}
    /**
     * Check if code point has the general category &quot;Lu&quot; (uppercase letter)
     */
     public static function isupper(string|int $codepoint): ?bool {}
    /**
     * Check if code point is a hexadecimal digit
     */
     public static function isxdigit(string|int $codepoint): ?bool {}
    /**
     * Return Unicode code point value of character
     */
     public static function ord(string|int $character): ?int {}
    /**
     * Make Unicode character lowercase
     */
     public static function tolower(string|int $codepoint): string|int|null {}
    /**
     * Make Unicode character titlecase
     */
     public static function totitle(string|int $codepoint): string|int|null {}
    /**
     * Make Unicode character uppercase
     */
     public static function toupper(string|int $codepoint): string|int|null {}
}

/**
 * The IntlCodePointBreakIterator class
 */
 class IntlCodePointBreakIterator extends \IntlBreakIterator implements \IteratorAggregate, \Traversable {
    /**
     * Get last code point passed over after advancing or receding the iterator
     */
     public function getLastCodePoint(): int {}
}

/**
 * The IntlDateFormatter class
 */
 class IntlDateFormatter {
    public const FULL = 0;
    public const GREGORIAN = 1;
    public const LONG = 1;
    public const MEDIUM = 2;
    public const NONE = -1;
    public const PATTERN = -2;
    public const RELATIVE_FULL = 128;
    public const RELATIVE_LONG = 129;
    public const RELATIVE_MEDIUM = 130;
    public const RELATIVE_SHORT = 131;
    public const SHORT = 3;
    public const TRADITIONAL = 0;
    public function __construct(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, \IntlTimeZone|\DateTimeZone|string|null $timezone = NULL, $calendar = NULL, ?string $pattern = NULL) {}
    /**
     * Create a date formatter
     */
     public static function create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, \IntlTimeZone|\DateTimeZone|string|null $timezone = NULL, \IntlCalendar|int|null $calendar = NULL, ?string $pattern = NULL): ?\IntlDateFormatter {}
    /**
     * Format the date/time value as a string
     */
     public function format($datetime): string|false {}
    /**
     * Formats an object
     */
     public static function formatObject($datetime, $format = NULL, ?string $locale = NULL): string|false {}
    /**
     * Get the calendar type used for the IntlDateFormatter
     */
     public function getCalendar(): int|false {}
    /**
     * Get copy of formatterʼs calendar object
     */
     public function getCalendarObject(): \IntlCalendar|false|null {}
    /**
     * Get the datetype used for the IntlDateFormatter
     */
     public function getDateType(): int|false {}
    /**
     * Get the error code from last operation
     */
     public function getErrorCode(): int {}
    /**
     * Get the error text from the last operation
     */
     public function getErrorMessage(): string {}
    /**
     * Get the locale used by formatter
     */
     public function getLocale(int $type = ULOC_ACTUAL_LOCALE): string|false {}
    /**
     * Get the pattern used for the IntlDateFormatter
     */
     public function getPattern(): string|false {}
    /**
     * Get the timetype used for the IntlDateFormatter
     */
     public function getTimeType(): int|false {}
    /**
     * Get formatterʼs timezone
     */
     public function getTimeZone(): \IntlTimeZone|false {}
    /**
     * Get the timezone-id used for the IntlDateFormatter
     */
     public function getTimeZoneId(): string|false {}
    /**
     * Get the lenient used for the IntlDateFormatter
     */
     public function isLenient(): bool {}
    /**
     * Parse string to a field-based time value
     */
     public function localtime(string $string, &$offset = NULL): array|false {}
    /**
     * Parse string to a timestamp value
     */
     public function parse(string $string, &$offset = NULL): int|float|false {}
    /**
     * Parse a string into a timestamp, updating an open calendar (PHP 8 >= 8.4.0)
     */
     public function parseToCalendar(string $string, &$offset = NULL): int|float|false {}
    /**
     * Sets the calendar type used by the formatter
     */
     public function setCalendar(\IntlCalendar|int|null $calendar): bool {}
    /**
     * Set the leniency of the parser
     */
     public function setLenient(bool $lenient): void {}
    /**
     * Set the pattern used for the IntlDateFormatter
     */
     public function setPattern(string $pattern): bool {}
    /**
     * Sets formatterʼs timezone
     */
     public function setTimeZone(\IntlTimeZone|\DateTimeZone|string|null $timezone): bool {}
}

/**
 * The IntlDatePatternGenerator class (PHP 8 >= 8.1.0)
 */
 class IntlDatePatternGenerator {
    public function __construct(?string $locale = NULL) {}
    /**
     * Creates a new IntlDatePatternGenerator instance (PHP 8 >= 8.1.0)
     */
     public static function create(?string $locale = NULL): ?\IntlDatePatternGenerator {}
    /**
     * Determines the most suitable date/time format (PHP 8 >= 8.1.0)
     */
     public function getBestPattern(string $skeleton): string|false {}
}

/**
 * Exception class for intl errors
 */
 class IntlException extends \Exception implements \Stringable, \Throwable {
}

/**
 * The IntlGregorianCalendar class
 */
 class IntlGregorianCalendar extends \IntlCalendar {
    /**
     * Create the Gregorian Calendar class
     */
     public function __construct($timezoneOrYear = null, $localeOrMonth = null, $day = null, $hour = null, $minute = null, $second = null) {}
    /**
     * Create a new IntlGregorianCalendar instance from date (PHP 8 >= 8.3.0)
     */
     public static function createFromDate(int $year, int $month, int $dayOfMonth): static {}
    /**
     * Create a new IntlGregorianCalendar instance from date and time (PHP 8 >= 8.3.0)
     */
     public static function createFromDateTime(int $year, int $month, int $dayOfMonth, int $hour, int $minute, ?int $second = NULL): static {}
    /**
     * Get the Gregorian Calendar change date
     */
     public function getGregorianChange(): float {}
    /**
     * Determine if the given year is a leap year
     */
     public function isLeapYear(int $year): bool {}
    /**
     * Set the Gregorian Calendar change date
     */
     public function setGregorianChange(float $timestamp): bool {}
}

/**
 * The IntlIterator class
 */
 class IntlIterator implements \Iterator, \Traversable {
    /**
     * Get the current element
     */
     public function current(): mixed {}
    /**
     * Get the current key
     */
     public function key(): mixed {}
    /**
     * Move forward to the next element
     */
     public function next(): void {}
    /**
     * Rewind the iterator to the first element
     */
     public function rewind(): void {}
    /**
     * Check if current position is valid
     */
     public function valid(): bool {}
}

/**
 * The IntlListFormatter class
 */
 final class IntlListFormatter {
    public const TYPE_AND = 0;
    public const TYPE_OR = 1;
    public const TYPE_UNITS = 2;
    public const WIDTH_NARROW = 2;
    public const WIDTH_SHORT = 1;
    public const WIDTH_WIDE = 0;
    /**
     * Creates a new IntlListFormatter instance
     */
     public function __construct(string $locale, int $type = IntlListFormatter::TYPE_AND, int $width = IntlListFormatter::WIDTH_WIDE) {}
    /**
     * Format a list of items
     */
     public function format(array $strings): string|false {}
    public function getErrorCode(): int {}
    public function getErrorMessage(): string {}
}

/**
 * The IntlPartsIterator class
 */
 class IntlPartsIterator extends \IntlIterator implements \Iterator, \Traversable {
    public const KEY_LEFT = 1;
    public const KEY_RIGHT = 2;
    public const KEY_SEQUENTIAL = 0;
    /**
     * Get IntlBreakIterator backing this parts iterator
     */
     public function getBreakIterator(): \IntlBreakIterator {}
    public function getRuleStatus(): int {}
}

/**
 * The IntlRuleBasedBreakIterator class
 */
 class IntlRuleBasedBreakIterator extends \IntlBreakIterator implements \IteratorAggregate, \Traversable {
    /**
     * Create iterator from ruleset
     */
     public function __construct(string $rules, bool $compiled = false) {}
    /**
     * Get the binary form of compiled rules
     */
     public function getBinaryRules(): string|false {}
    /**
     * Get the largest status value from the break rules that determined the current break position
     */
     public function getRuleStatus(): int {}
    /**
     * Get the status values from the break rules that determined the current break position
     */
     public function getRuleStatusVec(): array|false {}
    /**
     * Get the rule set used to create this object
     */
     public function getRules(): string|false {}
}

/**
 * The IntlTimeZone class
 */
 class IntlTimeZone {
    public const DISPLAY_GENERIC_LOCATION = 8;
    public const DISPLAY_LONG = 2;
    public const DISPLAY_LONG_GENERIC = 4;
    public const DISPLAY_LONG_GMT = 6;
    public const DISPLAY_SHORT = 1;
    public const DISPLAY_SHORT_COMMONLY_USED = 7;
    public const DISPLAY_SHORT_GENERIC = 3;
    public const DISPLAY_SHORT_GMT = 5;
    public const TYPE_ANY = 0;
    public const TYPE_CANONICAL = 1;
    public const TYPE_CANONICAL_LOCATION = 2;
    /**
     * Private constructor to disallow direct instantiation
     */
     private function __construct() {}
    /**
     * Get the number of IDs in the equivalency group that includes the given ID
     */
     public static function countEquivalentIDs(string $timezoneId): int|false {}
    /**
     * Create a new copy of the default timezone for this host
     */
     public static function createDefault(): \IntlTimeZone {}
    /**
     * Get an enumeration over time zone IDs associated with the
      given country or offset
     */
     public static function createEnumeration(string|int|null $countryOrRawOffset = NULL): \IntlIterator|false {}
    /**
     * Create a timezone object for the given ID
     */
     public static function createTimeZone(string $timezoneId): ?\IntlTimeZone {}
    /**
     * Get an enumeration over system time zone IDs with the given filter conditions
     */
     public static function createTimeZoneIDEnumeration(int $type, ?string $region = NULL, ?int $rawOffset = NULL): \IntlIterator|false {}
    /**
     * Create a timezone object from DateTimeZone
     */
     public static function fromDateTimeZone(\DateTimeZone $timezone): ?\IntlTimeZone {}
    /**
     * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
     */
     public static function getCanonicalID(string $timezoneId, &$isSystemId = NULL): string|false {}
    /**
     * Get the amount of time to be added to local standard time to get local wall clock time
     */
     public function getDSTSavings(): int {}
    /**
     * Get a name of this time zone suitable for presentation to the user
     */
     public function getDisplayName(bool $dst = false, int $style = IntlTimeZone::DISPLAY_LONG, ?string $locale = NULL): string|false {}
    /**
     * Get an ID in the equivalency group that includes the given ID
     */
     public static function getEquivalentID(string $timezoneId, int $offset): string|false {}
    /**
     * Get last error code on the object
     */
     public function getErrorCode(): int|false {}
    /**
     * Get last error message on the object
     */
     public function getErrorMessage(): string|false {}
    /**
     * Create GMT (UTC) timezone
     */
     public static function getGMT(): \IntlTimeZone {}
    /**
     * Get timezone ID
     */
     public function getID(): string|false {}
    /**
     * Translate a Windows timezone into a system timezone
     */
     public static function getIDForWindowsID(string $timezoneId, ?string $region = NULL): string|false {}
    /**
     * Translate a timezone identifier to its IANA equivalent (PHP 8 >= 8.4.0)
     */
     public static function getIanaID(string $timezoneId): string|false {}
    /**
     * Get the time zone raw and GMT offset for the given moment in time
     */
     public function getOffset(float $timestamp, bool $local, &$rawOffset, &$dstOffset): bool {}
    /**
     * Get the raw GMT offset (before taking daylight savings time into account
     */
     public function getRawOffset(): int {}
    /**
     * Get the region code associated with the given system time zone ID
     */
     public static function getRegion(string $timezoneId): string|false {}
    /**
     * Get the timezone data version currently used by ICU
     */
     public static function getTZDataVersion(): string|false {}
    /**
     * Get the &quot;unknown&quot; time zone
     */
     public static function getUnknown(): \IntlTimeZone {}
    /**
     * Translate a system timezone into a Windows timezone
     */
     public static function getWindowsID(string $timezoneId): string|false {}
    /**
     * Check if this zone has the same rules and offset as another zone
     */
     public function hasSameRules(\IntlTimeZone $other): bool {}
    /**
     * Convert to DateTimeZone object
     */
     public function toDateTimeZone(): \DateTimeZone|false {}
    /**
     * Check if this time zone uses daylight savings time
     */
     public function useDaylightTime(): bool {}
}

/**
 * The InvalidArgumentException class
 */
 class InvalidArgumentException extends \LogicException implements \Stringable, \Throwable {
}

/**
 * Iterator（迭代器）接口
 */
 interface Iterator extends \Traversable {
    /**
     * 返回当前元素
     */
     public abstract function current(): mixed;
    /**
     * 返回当前元素的键
     */
     public abstract function key(): mixed;
    /**
     * 向前移动到下一个元素
     */
     public abstract function next(): void;
    /**
     * 返回到迭代器的第一个元素
     */
     public abstract function rewind(): void;
    /**
     * 检查当前位置是否有效
     */
     public abstract function valid(): bool;
}

/**
 * IteratorAggregate（聚合式迭代器）接口
 */
 interface IteratorAggregate extends \Traversable {
    /**
     * 获取一个外部迭代器或可遍历对象
     */
     public abstract function getIterator(): \Traversable;
}

/**
 * The IteratorIterator class
 */
 class IteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    /**
     * Create an iterator from anything that is traversable
     */
     public function __construct(\Traversable $iterator, ?string $class = NULL) {}
    /**
     * Get the current value
     */
     public function current(): mixed {}
    /**
     * Get the inner iterator
     */
     public function getInnerIterator(): ?\Iterator {}
    /**
     * Get the key of the current element
     */
     public function key(): mixed {}
    /**
     * Forward to the next element
     */
     public function next(): void {}
    /**
     * Rewind to the first element
     */
     public function rewind(): void {}
    /**
     * Checks if the current element is valid
     */
     public function valid(): bool {}
}

/**
 * JsonException 类
 */
 class JsonException extends \Exception implements \Stringable, \Throwable {
}

/**
 * JSON 序列化接口
 */
 interface JsonSerializable {
    /**
     * 指定需要被序列化成 JSON 的数据
     */
     public abstract function jsonSerialize(): mixed;
}

/**
 * The LengthException class
 */
 class LengthException extends \LogicException implements \Stringable, \Throwable {
}

/**
 * The LibXMLError class
 */
 class LibXMLError {
    public int $code;
    public int $column;
    public string $file;
    public int $level;
    public int $line;
    public string $message;
}

/**
 * LimitIterator 类
 */
 class LimitIterator extends \IteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    /**
     * Construct a LimitIterator
     */
     public function __construct(\Iterator $iterator, int $offset = 0, int $limit = -1) {}
    /**
     * Return the current position
     */
     public function getPosition(): int {}
    /**
     * Move the iterator forward
     */
     public function next(): void {}
    /**
     * Rewind the iterator to the specified starting offset
     */
     public function rewind(): void {}
    /**
     * Seek to the given position
     */
     public function seek(int $offset): int {}
    /**
     * Check whether the current element is valid
     */
     public function valid(): bool {}
}

/**
 * The Locale class
 */
 class Locale {
    public const ACTUAL_LOCALE = 0;
    public const DEFAULT_LOCALE = NULL;
    public const EXTLANG_TAG = "extlang";
    public const GRANDFATHERED_LANG_TAG = "grandfathered";
    public const LANG_TAG = "language";
    public const PRIVATE_TAG = "private";
    public const REGION_TAG = "region";
    public const SCRIPT_TAG = "script";
    public const VALID_LOCALE = 1;
    public const VARIANT_TAG = "variant";
    /**
     * Tries to find out best available locale based on HTTP &quot;Accept-Language&quot; header
     */
     public static function acceptFromHttp(string $header): string|false {}
    /**
     * Add likely subtags to a locale
     */
     public static function addLikelySubtags(string $locale): string|false {}
    /**
     * Canonicalize the locale string
     */
     public static function canonicalize(string $locale): ?string {}
    /**
     * Returns a correctly ordered and delimited locale ID
     */
     public static function composeLocale(array $subtags): string|false {}
    /**
     * Checks if a language tag filter matches with locale
     */
     public static function filterMatches(string $languageTag, string $locale, bool $canonicalize = false): ?bool {}
    /**
     * Gets the variants for the input locale
     */
     public static function getAllVariants(string $locale): ?array {}
    /**
     * Gets the default locale value from the INTL global 'default_locale'
     */
     public static function getDefault(): string {}
    /**
     * Returns an appropriately localized display name for language of the inputlocale
     */
     public static function getDisplayLanguage(string $locale, ?string $displayLocale = NULL): string|false {}
    /**
     * Returns an appropriately localized display name for the input locale
     */
     public static function getDisplayName(string $locale, ?string $displayLocale = NULL): string|false {}
    /**
     * Returns an appropriately localized display name for region of the input locale
     */
     public static function getDisplayRegion(string $locale, ?string $displayLocale = NULL): string|false {}
    /**
     * Returns an appropriately localized display name for script of the input locale
     */
     public static function getDisplayScript(string $locale, ?string $displayLocale = NULL): string|false {}
    /**
     * Returns an appropriately localized display name for variants of the input locale
     */
     public static function getDisplayVariant(string $locale, ?string $displayLocale = NULL): string|false {}
    /**
     * Gets the keywords for the input locale
     */
     public static function getKeywords(string $locale): array|false|null {}
    /**
     * Gets the primary language for the input locale
     */
     public static function getPrimaryLanguage(string $locale): ?string {}
    /**
     * Gets the region for the input locale
     */
     public static function getRegion(string $locale): ?string {}
    /**
     * Gets the script for the input locale
     */
     public static function getScript(string $locale): ?string {}
    /**
     * Check whether a locale uses a right-to-left writing system
     */
     public static function isRightToLeft(string $locale): bool {}
    /**
     * Searches the language tag list for the best match to the language
     */
     public static function lookup(array $languageTag, string $locale, bool $canonicalize = false, ?string $defaultLocale = NULL): ?string {}
    /**
     * Remove likely subtags from a locale
     */
     public static function minimizeSubtags(string $locale): string|false {}
    /**
     * Returns a key-value array of locale ID subtag elements
     */
     public static function parseLocale(string $locale): ?array {}
    /**
     * Sets the default runtime locale
     */
     public static function setDefault(string $locale): true {}
}

/**
 * The LogicException class
 */
 class LogicException extends \Exception implements \Stringable, \Throwable {
}

/**
 * The MessageFormatter class
 */
 class MessageFormatter {
    public function __construct(string $locale, string $pattern) {}
    /**
     * Constructs a new Message Formatter
     */
     public static function create(string $locale, string $pattern): ?\MessageFormatter {}
    /**
     * Format the message
     */
     public function format(array $values): string|false {}
    /**
     * Quick format message
     */
     public static function formatMessage(string $locale, string $pattern, array $values): string|false {}
    /**
     * Get the error code from last operation
     */
     public function getErrorCode(): int {}
    /**
     * Get the error text from the last operation
     */
     public function getErrorMessage(): string {}
    /**
     * Get the locale for which the formatter was created
     */
     public function getLocale(): string {}
    /**
     * Get the pattern used by the formatter
     */
     public function getPattern(): string|false {}
    /**
     * Parse input string according to pattern
     */
     public function parse(string $string): array|false {}
    /**
     * Quick parse input string
     */
     public static function parseMessage(string $locale, string $pattern, string $message): array|false {}
    /**
     * Set the pattern used by the formatter
     */
     public function setPattern(string $pattern): bool {}
}

/**
 * The MultipleIterator class
 */
 class MultipleIterator implements \Iterator, \Traversable {
    public const MIT_KEYS_ASSOC = 2;
    public const MIT_KEYS_NUMERIC = 0;
    public const MIT_NEED_ALL = 1;
    public const MIT_NEED_ANY = 0;
    /**
     * Constructs a new MultipleIterator
     */
     public function __construct(int $flags = 1) {}
    public function __debugInfo(): array {}
    /**
     * Attaches iterator information
     */
     public function attachIterator(\Iterator $iterator, string|int|null $info = NULL): void {}
    /**
     * Checks if an iterator is attached
     */
     public function containsIterator(\Iterator $iterator): bool {}
    /**
     * Gets the number of attached iterator instances
     */
     public function countIterators(): int {}
    /**
     * Gets the registered iterator instances
     */
     public function current(): array {}
    /**
     * Detaches an iterator
     */
     public function detachIterator(\Iterator $iterator): void {}
    /**
     * Gets the flag information
     */
     public function getFlags(): int {}
    /**
     * Gets the registered iterator instances
     */
     public function key(): array {}
    /**
     * Moves all attached iterator instances forward
     */
     public function next(): void {}
    /**
     * Rewinds all attached iterator instances
     */
     public function rewind(): void {}
    /**
     * Sets flags
     */
     public function setFlags(int $flags): void {}
    /**
     * Checks the validity of sub iterators
     */
     public function valid(): bool {}
}

final class NoDiscard {
    public readonly ?string $message;
    public function __construct(?string $message = NULL) {}
}

/**
 * The NoRewindIterator class
 */
 class NoRewindIterator extends \IteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    /**
     * Construct a NoRewindIterator
     */
     public function __construct(\Iterator $iterator) {}
    /**
     * Get the current value
     */
     public function current(): mixed {}
    /**
     * Get the current key
     */
     public function key(): mixed {}
    /**
     * Forward to the next element
     */
     public function next(): void {}
    /**
     * Prevents the rewind operation on the inner iterator
     */
     public function rewind(): void {}
    /**
     * Validates the iterator
     */
     public function valid(): bool {}
}

/**
 * The Normalizer class
 */
 class Normalizer {
    public const FORM_C = 16;
    public const FORM_D = 4;
    public const FORM_KC = 32;
    public const FORM_KC_CF = 48;
    public const FORM_KD = 8;
    public const NFC = 16;
    public const NFD = 4;
    public const NFKC = 32;
    public const NFKC_CF = 48;
    public const NFKD = 8;
    /**
     * Gets the Decomposition_Mapping property for the given UTF-8 encoded code point
     */
     public static function getRawDecomposition(string $string, int $form = Normalizer::FORM_C): ?string {}
    /**
     * Checks if the provided string is already in the specified normalization
       form
     */
     public static function isNormalized(string $string, int $form = Normalizer::FORM_C): bool {}
    /**
     * Normalizes the input provided and returns the normalized string
     */
     public static function normalize(string $string, int $form = Normalizer::FORM_C): string|false {}
}

/**
 * The NumberFormatter class
 */
 class NumberFormatter {
    public const CASH_CURRENCY = 13;
    public const CURRENCY = 2;
    public const CURRENCY_ACCOUNTING = 12;
    public const CURRENCY_CODE = 5;
    public const CURRENCY_ISO = 10;
    public const CURRENCY_PLURAL = 11;
    public const CURRENCY_STANDARD = 16;
    public const CURRENCY_SYMBOL = 8;
    public const DECIMAL = 1;
    public const DECIMAL_ALWAYS_SHOWN = 2;
    public const DECIMAL_COMPACT_LONG = 15;
    public const DECIMAL_COMPACT_SHORT = 14;
    public const DECIMAL_SEPARATOR_SYMBOL = 0;
    public const DEFAULT_RULESET = 6;
    public const DEFAULT_STYLE = 1;
    public const DIGIT_SYMBOL = 5;
    public const DURATION = 7;
    public const EXPONENTIAL_SYMBOL = 11;
    public const FORMAT_WIDTH = 13;
    public const FRACTION_DIGITS = 8;
    public const GROUPING_SEPARATOR_SYMBOL = 1;
    public const GROUPING_SIZE = 10;
    public const GROUPING_USED = 1;
    public const IGNORE = 0;
    public const INFINITY_SYMBOL = 14;
    public const INTEGER_DIGITS = 5;
    public const INTL_CURRENCY_SYMBOL = 9;
    public const LENIENT_PARSE = 19;
    public const MAX_FRACTION_DIGITS = 6;
    public const MAX_INTEGER_DIGITS = 3;
    public const MAX_SIGNIFICANT_DIGITS = 18;
    public const MINUS_SIGN_SYMBOL = 6;
    public const MIN_FRACTION_DIGITS = 7;
    public const MIN_INTEGER_DIGITS = 4;
    public const MIN_SIGNIFICANT_DIGITS = 17;
    public const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;
    public const MONETARY_SEPARATOR_SYMBOL = 10;
    public const MULTIPLIER = 9;
    public const NAN_SYMBOL = 15;
    public const NEGATIVE_PREFIX = 2;
    public const NEGATIVE_SUFFIX = 3;
    public const ORDINAL = 6;
    public const PADDING_CHARACTER = 4;
    public const PADDING_POSITION = 14;
    public const PAD_AFTER_PREFIX = 1;
    public const PAD_AFTER_SUFFIX = 3;
    public const PAD_BEFORE_PREFIX = 0;
    public const PAD_BEFORE_SUFFIX = 2;
    public const PAD_ESCAPE_SYMBOL = 13;
    public const PARSE_INT_ONLY = 0;
    public const PATTERN_DECIMAL = 0;
    public const PATTERN_RULEBASED = 9;
    public const PATTERN_SEPARATOR_SYMBOL = 2;
    public const PERCENT = 3;
    public const PERCENT_SYMBOL = 3;
    public const PERMILL_SYMBOL = 12;
    public const PLUS_SIGN_SYMBOL = 7;
    public const POSITIVE_PREFIX = 0;
    public const POSITIVE_SUFFIX = 1;
    public const PUBLIC_RULESETS = 7;
    public const ROUNDING_INCREMENT = 12;
    public const ROUNDING_MODE = 11;
    public const ROUND_AWAY_FROM_ZERO = 3;
    public const ROUND_CEILING = 0;
    public const ROUND_DOWN = 2;
    public const ROUND_FLOOR = 1;
    public const ROUND_HALFDOWN = 5;
    public const ROUND_HALFEVEN = 4;
    public const ROUND_HALFODD = 8;
    public const ROUND_HALFUP = 6;
    public const ROUND_TOWARD_ZERO = 2;
    public const ROUND_UP = 3;
    public const SCIENTIFIC = 4;
    public const SECONDARY_GROUPING_SIZE = 15;
    public const SIGNIFICANT_DIGITS_USED = 16;
    public const SIGNIFICANT_DIGIT_SYMBOL = 16;
    public const SPELLOUT = 5;
    public const TYPE_CURRENCY = 4;
    public const TYPE_DEFAULT = 0;
    public const TYPE_DOUBLE = 3;
    public const TYPE_INT32 = 1;
    public const TYPE_INT64 = 2;
    public const ZERO_DIGIT_SYMBOL = 4;
    public function __construct(string $locale, int $style, ?string $pattern = NULL) {}
    /**
     * Create a number formatter
     */
     public static function create(string $locale, int $style, ?string $pattern = NULL): ?\NumberFormatter {}
    /**
     * Format a number
     */
     public function format(int|float $num, int $type = NumberFormatter::TYPE_DEFAULT): string|false {}
    /**
     * Format a currency value
     */
     public function formatCurrency(float $amount, string $currency): string|false {}
    /**
     * Get an attribute
     */
     public function getAttribute(int $attribute): int|float|false {}
    /**
     * Get formatter's last error code
     */
     public function getErrorCode(): int {}
    /**
     * Get formatter's last error message
     */
     public function getErrorMessage(): string {}
    /**
     * Get formatter locale
     */
     public function getLocale(int $type = ULOC_ACTUAL_LOCALE): string|false {}
    /**
     * Get formatter pattern
     */
     public function getPattern(): string|false {}
    /**
     * Get a symbol value
     */
     public function getSymbol(int $symbol): string|false {}
    /**
     * Get a text attribute
     */
     public function getTextAttribute(int $attribute): string|false {}
    /**
     * Parse a number
     */
     public function parse(string $string, int $type = NumberFormatter::TYPE_DOUBLE, &$offset = NULL): int|float|false {}
    /**
     * Parse a currency number
     */
     public function parseCurrency(string $string, &$currency, &$offset = NULL): float|false {}
    /**
     * Set an attribute
     */
     public function setAttribute(int $attribute, int|float $value): bool {}
    /**
     * Set formatter pattern
     */
     public function setPattern(string $pattern): bool {}
    /**
     * Set a symbol value
     */
     public function setSymbol(int $symbol, string $value): bool {}
    /**
     * Set a text attribute
     */
     public function setTextAttribute(int $attribute, string $value): bool {}
}

/**
 * OpenSSLAsymmetricKey 类
 */
 final class OpenSSLAsymmetricKey {
}

/**
 * OpenSSLCertificate 类
 */
 final class OpenSSLCertificate {
}

/**
 * OpenSSLCertificateSigningRequest 类
 */
 final class OpenSSLCertificateSigningRequest {
}

/**
 * The OutOfBoundsException class
 */
 class OutOfBoundsException extends \RuntimeException implements \Stringable, \Throwable {
}

/**
 * The OutOfRangeException class
 */
 class OutOfRangeException extends \LogicException implements \Stringable, \Throwable {
}

/**
 * The OuterIterator interface
 */
 interface OuterIterator extends \Iterator, \Traversable {
    /**
     * Returns the inner iterator for the current entry
     */
     public abstract function getInnerIterator(): ?\Iterator;
}

/**
 * The OverflowException class
 */
 class OverflowException extends \RuntimeException implements \Stringable, \Throwable {
}

/**
 * Override 注解 (PHP 8 >= 8.3.0)
 */
 final class Override {
    /**
     * 构造新的 Override 属性实例 (PHP 8 >= 8.3.0)
     */
     public function __construct() {}
}

/**
 * PDO 类
 */
 class PDO {
    public const ATTR_AUTOCOMMIT = 0;
    public const ATTR_CASE = 8;
    public const ATTR_CLIENT_VERSION = 5;
    public const ATTR_CONNECTION_STATUS = 7;
    public const ATTR_CURSOR = 10;
    public const ATTR_CURSOR_NAME = 9;
    public const ATTR_DEFAULT_FETCH_MODE = 19;
    public const ATTR_DEFAULT_STR_PARAM = 21;
    public const ATTR_DRIVER_NAME = 16;
    public const ATTR_EMULATE_PREPARES = 20;
    public const ATTR_ERRMODE = 3;
    public const ATTR_FETCH_CATALOG_NAMES = 15;
    public const ATTR_FETCH_TABLE_NAMES = 14;
    public const ATTR_MAX_COLUMN_LEN = 18;
    public const ATTR_ORACLE_NULLS = 11;
    public const ATTR_PERSISTENT = 12;
    public const ATTR_PREFETCH = 1;
    public const ATTR_SERVER_INFO = 6;
    public const ATTR_SERVER_VERSION = 4;
    public const ATTR_STATEMENT_CLASS = 13;
    public const ATTR_STRINGIFY_FETCHES = 17;
    public const ATTR_TIMEOUT = 2;
    public const CASE_LOWER = 2;
    public const CASE_NATURAL = 0;
    public const CASE_UPPER = 1;
    public const CURSOR_FWDONLY = 0;
    public const CURSOR_SCROLL = 1;
    public const ERRMODE_EXCEPTION = 2;
    public const ERRMODE_SILENT = 0;
    public const ERRMODE_WARNING = 1;
    public const ERR_NONE = "00000";
    public const FETCH_ASSOC = 2;
    public const FETCH_BOTH = 4;
    public const FETCH_BOUND = 6;
    public const FETCH_CLASS = 8;
    public const FETCH_CLASSTYPE = 128;
    public const FETCH_COLUMN = 7;
    public const FETCH_DEFAULT = 0;
    public const FETCH_FUNC = 10;
    public const FETCH_GROUP = 32;
    public const FETCH_INTO = 9;
    public const FETCH_KEY_PAIR = 12;
    public const FETCH_LAZY = 1;
    public const FETCH_NAMED = 11;
    public const FETCH_NUM = 3;
    public const FETCH_OBJ = 5;
    public const FETCH_ORI_ABS = 4;
    public const FETCH_ORI_FIRST = 2;
    public const FETCH_ORI_LAST = 3;
    public const FETCH_ORI_NEXT = 0;
    public const FETCH_ORI_PRIOR = 1;
    public const FETCH_ORI_REL = 5;
    public const FETCH_PROPS_LATE = 256;
    public const FETCH_SERIALIZE = 512;
    public const FETCH_UNIQUE = 64;
    public const MYSQL_ATTR_COMPRESS = 1003;
    public const MYSQL_ATTR_DIRECT_QUERY = 20;
    public const MYSQL_ATTR_FOUND_ROWS = 1004;
    public const MYSQL_ATTR_IGNORE_SPACE = 1005;
    public const MYSQL_ATTR_INIT_COMMAND = 1002;
    public const MYSQL_ATTR_LOCAL_INFILE = 1001;
    public const MYSQL_ATTR_LOCAL_INFILE_DIRECTORY = 1014;
    public const MYSQL_ATTR_MULTI_STATEMENTS = 1012;
    public const MYSQL_ATTR_SERVER_PUBLIC_KEY = 1011;
    public const MYSQL_ATTR_SSL_CA = 1008;
    public const MYSQL_ATTR_SSL_CAPATH = 1009;
    public const MYSQL_ATTR_SSL_CERT = 1007;
    public const MYSQL_ATTR_SSL_CIPHER = 1010;
    public const MYSQL_ATTR_SSL_KEY = 1006;
    public const MYSQL_ATTR_SSL_VERIFY_SERVER_CERT = 1013;
    public const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;
    public const NULL_EMPTY_STRING = 1;
    public const NULL_NATURAL = 0;
    public const NULL_TO_STRING = 2;
    public const ODBC_ATTR_ASSUME_UTF8 = 1001;
    public const ODBC_ATTR_USE_CURSOR_LIBRARY = 1000;
    public const ODBC_SQL_USE_DRIVER = 2;
    public const ODBC_SQL_USE_IF_NEEDED = 0;
    public const ODBC_SQL_USE_ODBC = 1;
    public const PARAM_BOOL = 5;
    public const PARAM_EVT_ALLOC = 0;
    public const PARAM_EVT_EXEC_POST = 3;
    public const PARAM_EVT_EXEC_PRE = 2;
    public const PARAM_EVT_FETCH_POST = 5;
    public const PARAM_EVT_FETCH_PRE = 4;
    public const PARAM_EVT_FREE = 1;
    public const PARAM_EVT_NORMALIZE = 6;
    public const PARAM_INPUT_OUTPUT = -2147483648;
    public const PARAM_INT = 1;
    public const PARAM_LOB = 3;
    public const PARAM_NULL = 0;
    public const PARAM_STMT = 4;
    public const PARAM_STR = 2;
    public const PARAM_STR_CHAR = 536870912;
    public const PARAM_STR_NATL = 1073741824;
    public const PGSQL_ATTR_DISABLE_PREPARES = 1000;
    public const PGSQL_TRANSACTION_ACTIVE = 1;
    public const PGSQL_TRANSACTION_IDLE = 0;
    public const PGSQL_TRANSACTION_INERROR = 3;
    public const PGSQL_TRANSACTION_INTRANS = 2;
    public const PGSQL_TRANSACTION_UNKNOWN = 4;
    public const SQLITE_ATTR_EXTENDED_RESULT_CODES = 1002;
    public const SQLITE_ATTR_OPEN_FLAGS = 1000;
    public const SQLITE_ATTR_READONLY_STATEMENT = 1001;
    public const SQLITE_DETERMINISTIC = 2048;
    public const SQLITE_OPEN_CREATE = 4;
    public const SQLITE_OPEN_READONLY = 1;
    public const SQLITE_OPEN_READWRITE = 2;
    /**
     * 创建一个表示数据库连接的 PDO 实例
     */
     public function __construct(string $dsn, ?string $username = NULL, ?string $password = NULL, ?array $options = NULL) {}
    /**
     * 启动一个事务
     */
     public function beginTransaction(): bool {}
    /**
     * 提交一个事务
     */
     public function commit(): bool {}
    /**
     * 连接到数据库，如果驱动支持则返回 PDO 子类实例 (PHP 8 >= 8.4.0)
     */
     public static function connect(string $dsn, ?string $username = NULL, ?string $password = NULL, ?array $options = NULL): static {}
    /**
     * 获取跟数据库句柄上一次操作相关的 SQLSTATE
     */
     public function errorCode(): ?string {}
    /**
     * 获取与数据库句柄上最后一次操作相关的扩展错误信息
     */
     public function errorInfo(): array {}
    /**
     * 执行 SQL 语句，并返回受影响的行数
     */
     public function exec(string $statement): int|false {}
    /**
     * 取回一个数据库连接的属性
     */
     public function getAttribute(int $attribute): mixed {}
    /**
     * 返回一个可用驱动的数组
     */
     public static function getAvailableDrivers(): array {}
    /**
     * 检查是否在事务内
     */
     public function inTransaction(): bool {}
    /**
     * 返回最后插入行的ID或序列值
     */
     public function lastInsertId(?string $name = NULL): string|false {}
    /**
     * 预处理要执行的语句，并返回语句对象
     */
     public function prepare(string $query, array $options = []): \PDOStatement|false {}
    /**
     * 预处理并执行没有占位符的 SQL 语句
     */
     public function query(string $query, ?int $fetchMode = NULL, mixed ...$fetchModeArgs): \PDOStatement|false {}
    /**
     * 为 SQL 查询里的字符串添加引号
     */
     public function quote(string $string, int $type = PDO::PARAM_STR): string|false {}
    /**
     * 回滚事务
     */
     public function rollBack(): bool {}
    /**
     * 设置属性
     */
     public function setAttribute(int $attribute, mixed $value): bool {}
}

/**
 * PDOException 异常类
 */
 class PDOException extends \RuntimeException implements \Stringable, \Throwable {
    protected $code;
    public ?array $errorInfo;
}

/**
 * The PDORow class
 */
 final class PDORow {
    public string $queryString;
}

/**
 * PDOStatement 类
 */
 class PDOStatement implements \IteratorAggregate, \Traversable {
    public string $queryString;
    /**
     * 绑定一列到一个 PHP 变量
     */
     public function bindColumn(string|int $column, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = NULL): bool {}
    /**
     * 绑定一个参数到指定的变量名
     */
     public function bindParam(string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = NULL): bool {}
    /**
     * 把一个值绑定到一个参数
     */
     public function bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR): bool {}
    /**
     * 关闭游标，使语句能再次被执行
     */
     public function closeCursor(): bool {}
    /**
     * 返回结果集中的列数
     */
     public function columnCount(): int {}
    /**
     * 打印一条 SQL 预处理命令
     */
     public function debugDumpParams(): ?bool {}
    /**
     * 获取跟上一次语句句柄操作相关的 SQLSTATE
     */
     public function errorCode(): ?string {}
    /**
     * 获取跟上一次语句句柄操作相关的扩展错误信息
     */
     public function errorInfo(): array {}
    /**
     * 执行预处理语句
     */
     public function execute(?array $params = NULL): bool {}
    /**
     * 从结果集中获取下一行
     */
     public function fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0): mixed {}
    /**
     * 从结果集中获取剩余的行
     */
     public function fetchAll(int $mode = PDO::FETCH_DEFAULT, mixed ...$args): array {}
    /**
     * 从结果集中的下一行返回单独的一列
     */
     public function fetchColumn(int $column = 0): mixed {}
    /**
     * 获取下一行并作为一个对象返回
     */
     public function fetchObject(?string $class = "stdClass", array $constructorArgs = []): object|false {}
    /**
     * 检索语句属性
     */
     public function getAttribute(int $name): mixed {}
    /**
     * 返回结果集中一列的元数据
     */
     public function getColumnMeta(int $column): array|false {}
    /**
     * 获取结果集迭代器
     */
     public function getIterator(): \Iterator {}
    /**
     * 在一个多行集合语句句柄中推进到下一个行集合
     */
     public function nextRowset(): bool {}
    /**
     * 返回受上一个 SQL 语句影响的行数
     */
     public function rowCount(): int {}
    /**
     * 设置一个语句属性
     */
     public function setAttribute(int $attribute, mixed $value): bool {}
    /**
     * 为语句设置默认的获取模式
     */
     public function setFetchMode(int $mode, mixed ...$args): true {}
}

/**
 * The ParentIterator class
 */
 class ParentIterator extends \RecursiveFilterIterator implements \Iterator, \OuterIterator, \RecursiveIterator, \Traversable {
    /**
     * Constructs a ParentIterator
     */
     public function __construct(\RecursiveIterator $iterator) {}
    /**
     * Determines acceptability
     */
     public function accept(): bool {}
}

/**
 * ParseError
 */
 class ParseError extends \CompileError implements \Stringable, \Throwable {
}

/**
 * The Phar class
 */
 class Phar extends \RecursiveDirectoryIterator implements \ArrayAccess, \Countable, \Iterator, \RecursiveIterator, \SeekableIterator, \Stringable, \Traversable {
    public const BZ2 = 8192;
    public const COMPRESSED = 61440;
    public const GZ = 4096;
    public const MD5 = 1;
    public const NONE = 0;
    public const OPENSSL = 16;
    public const OPENSSL_SHA256 = 17;
    public const OPENSSL_SHA512 = 18;
    public const PHAR = 1;
    public const PHP = 0;
    public const PHPS = 1;
    public const SHA1 = 2;
    public const SHA256 = 3;
    public const SHA512 = 4;
    public const TAR = 2;
    public const ZIP = 3;
    /**
     * Construct a Phar archive object
     */
     public function __construct(string $filename, int $flags = 12288, ?string $alias = NULL) {}
    public function __destruct() {}
    /**
     * 添加一个空目录到 phar 档案
     */
     public function addEmptyDir(string $directory): void {}
    /**
     * 将一个文件从文件系统添加到 phar 档案中
     */
     public function addFile(string $filename, ?string $localName = NULL): void {}
    /**
     * 以字符串的形式添加一个文件到 phar 档案
     */
     public function addFromString(string $localName, string $contents): void {}
    /**
     * Returns the api version
     */
     public final static function apiVersion(): string {}
    /**
     * Construct a phar archive from the files within a directory
     */
     public function buildFromDirectory(string $directory, string $pattern = ""): array {}
    /**
     * Construct a phar archive from an iterator
     */
     public function buildFromIterator(\Traversable $iterator, ?string $baseDirectory = NULL): array {}
    /**
     * Returns whether phar extension supports compression using either zlib or bzip2
     */
     public final static function canCompress(int $compression = 0): bool {}
    /**
     * Returns whether phar extension supports writing and creating phars
     */
     public final static function canWrite(): bool {}
    /**
     * Compresses the entire Phar archive using Gzip or Bzip2 compression
     */
     public function compress(int $compression, ?string $extension = NULL): ?\Phar {}
    /**
     * Compresses all files in the current Phar archive
     */
     public function compressFiles(int $compression): void {}
    /**
     * Convert a phar archive to a non-executable tar or zip file
     */
     public function convertToData(?int $format = NULL, ?int $compression = NULL, ?string $extension = NULL): ?\PharData {}
    /**
     * Convert a phar archive to another executable phar archive file format
     */
     public function convertToExecutable(?int $format = NULL, ?int $compression = NULL, ?string $extension = NULL): ?\Phar {}
    /**
     * Copy a file internal to the phar archive to another new file within the phar
     */
     public function copy(string $from, string $to): true {}
    /**
     * Returns the number of entries (files) in the Phar archive
     */
     public function count(int $mode = COUNT_NORMAL): int {}
    /**
     * Create a phar-file format specific stub
     */
     public final static function createDefaultStub(?string $index = NULL, ?string $webIndex = NULL): string {}
    /**
     * Decompresses the entire Phar archive
     */
     public function decompress(?string $extension = NULL): ?\Phar {}
    /**
     * Decompresses all files in the current Phar archive
     */
     public function decompressFiles(): true {}
    /**
     * Deletes the global metadata of the phar
     */
     public function delMetadata(): true {}
    /**
     * 删除 phar 档案中的一个文件
     */
     public function delete(string $localName): true {}
    /**
     * Extract the contents of a phar archive to a directory
     */
     public function extractTo(string $directory, array|string|null $files = NULL, bool $overwrite = false): bool {}
    /**
     * Get the alias for Phar
     */
     public function getAlias(): ?string {}
    /**
     * Returns phar archive meta-data
     */
     public function getMetadata(array $unserializeOptions = []): mixed {}
    /**
     * Return whether phar was modified
     */
     public function getModified(): bool {}
    /**
     * Get the real path to the Phar archive on disk
     */
     public function getPath(): string {}
    /**
     * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
     */
     public function getSignature(): array|false {}
    /**
     * Return the PHP loader or bootstrap stub of a Phar archive
     */
     public function getStub(): string {}
    /**
     * Return array of supported compression algorithms
     */
     public final static function getSupportedCompression(): array {}
    /**
     * Return array of supported signature types
     */
     public final static function getSupportedSignatures(): array {}
    /**
     * Return version info of Phar archive
     */
     public function getVersion(): string {}
    /**
     * Returns whether phar has global meta-data
     */
     public function hasMetadata(): bool {}
    /**
     * Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
     */
     public final static function interceptFileFuncs(): void {}
    /**
     * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
     */
     public function isBuffering(): bool {}
    /**
     * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
     */
     public function isCompressed(): int|false {}
    /**
     * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
     */
     public function isFileFormat(int $format): bool {}
    /**
     * Returns whether the given filename is a valid phar filename
     */
     public final static function isValidPharFilename(string $filename, bool $executable = true): bool {}
    /**
     * Returns true if the phar archive can be modified
     */
     public function isWritable(): bool {}
    /**
     * Loads any phar archive with an alias
     */
     public final static function loadPhar(string $filename, ?string $alias = NULL): bool {}
    /**
     * Reads the currently executed file (a phar) and registers its manifest
     */
     public final static function mapPhar(?string $alias = NULL, int $offset = 0): bool {}
    /**
     * Mount an external path or file to a virtual location within the phar archive
     */
     public final static function mount(string $pharPath, string $externalPath): void {}
    /**
     * Defines a list of up to 4 $_SERVER variables that should be modified for execution
     */
     public final static function mungServer(array $variables): void {}
    /**
     * Determines whether a file exists in the phar
     */
     public function offsetExists($localName): bool {}
    /**
     * Gets a PharFileInfo object for a specific file
     */
     public function offsetGet($localName): \SplFileInfo {}
    /**
     * Set the contents of an internal file to those of an external file
     */
     public function offsetSet($localName, $value): void {}
    /**
     * Remove a file from a phar
     */
     public function offsetUnset($localName): void {}
    /**
     * Returns the full path on disk or full phar URL to the currently executing Phar archive
     */
     public final static function running(bool $returnPhar = true): string {}
    /**
     * Set the alias for the Phar archive
     */
     public function setAlias(string $alias): true {}
    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
     */
     public function setDefaultStub(?string $index = NULL, ?string $webIndex = NULL): true {}
    /**
     * Sets phar archive meta-data
     */
     public function setMetadata(mixed $metadata): void {}
    /**
     * Set the signature algorithm for a phar and apply it
     */
     public function setSignatureAlgorithm(int $algo, ?string $privateKey = NULL): void {}
    /**
     * Used to set the PHP loader or bootstrap stub of a Phar archive
     */
     public function setStub($stub, int $length = null): true {}
    /**
     * Start buffering Phar write operations, do not modify the Phar object on disk
     */
     public function startBuffering(): void {}
    /**
     * Stop buffering write requests to the Phar archive, and save changes to disk
     */
     public function stopBuffering(): void {}
    /**
     * Completely remove a phar archive from disk and from memory
     */
     public final static function unlinkArchive(string $filename): true {}
    /**
     * Routes a request from a web browser to an internal file within the phar archive
     */
     public final static function webPhar(?string $alias = NULL, ?string $index = NULL, ?string $fileNotFoundScript = NULL, array $mimeTypes = [], ?callable $rewrite = NULL): void {}
}

/**
 * The PharData class
 */
 class PharData extends \RecursiveDirectoryIterator implements \ArrayAccess, \Countable, \Iterator, \RecursiveIterator, \SeekableIterator, \Stringable, \Traversable {
    /**
     * Construct a non-executable tar or zip archive object
     */
     public function __construct(string $filename, int $flags = 12288, ?string $alias = NULL, int $format = 0) {}
    public function __destruct() {}
    /**
     * Add an empty directory to the tar/zip archive
     */
     public function addEmptyDir(string $directory): void {}
    /**
     * Add a file from the filesystem to the tar/zip archive
     */
     public function addFile(string $filename, ?string $localName = NULL): void {}
    /**
     * Add a file from a string to the tar/zip archive
     */
     public function addFromString(string $localName, string $contents): void {}
    public final static function apiVersion(): string {}
    /**
     * Construct a tar/zip archive from the files within a directory
     */
     public function buildFromDirectory(string $directory, string $pattern = ""): array {}
    /**
     * Construct a tar or zip archive from an iterator
     */
     public function buildFromIterator(\Traversable $iterator, ?string $baseDirectory = NULL): array {}
    public final static function canCompress(int $compression = 0): bool {}
    public final static function canWrite(): bool {}
    /**
     * Compresses the entire tar/zip archive using Gzip or Bzip2 compression
     */
     public function compress(int $compression, ?string $extension = NULL): ?\PharData {}
    /**
     * Compresses all files in the current tar/zip archive
     */
     public function compressFiles(int $compression): void {}
    /**
     * Convert a phar archive to a non-executable tar or zip file
     */
     public function convertToData(?int $format = NULL, ?int $compression = NULL, ?string $extension = NULL): ?\PharData {}
    /**
     * Convert a non-executable tar/zip archive to an executable phar archive
     */
     public function convertToExecutable(?int $format = NULL, ?int $compression = NULL, ?string $extension = NULL): ?\Phar {}
    /**
     * Copy a file internal to the tar/zip archive to another new file within the same archive
     */
     public function copy(string $from, string $to): true {}
    public function count(int $mode = COUNT_NORMAL): int {}
    public final static function createDefaultStub(?string $index = NULL, ?string $webIndex = NULL): string {}
    /**
     * Decompresses the entire Phar archive
     */
     public function decompress(?string $extension = NULL): ?\PharData {}
    /**
     * Decompresses all files in the current zip archive
     */
     public function decompressFiles(): true {}
    /**
     * Deletes the global metadata of a zip archive
     */
     public function delMetadata(): true {}
    /**
     * Delete a file within a tar/zip archive
     */
     public function delete(string $localName): true {}
    /**
     * Extract the contents of a tar/zip archive to a directory
     */
     public function extractTo(string $directory, array|string|null $files = NULL, bool $overwrite = false): bool {}
    public function getAlias(): ?string {}
    public function getMetadata(array $unserializeOptions = []): mixed {}
    public function getModified(): bool {}
    public function getPath(): string {}
    public function getSignature(): array|false {}
    public function getStub(): string {}
    public final static function getSupportedCompression(): array {}
    public final static function getSupportedSignatures(): array {}
    public function getVersion(): string {}
    public function hasMetadata(): bool {}
    public final static function interceptFileFuncs(): void {}
    public function isBuffering(): bool {}
    public function isCompressed(): int|false {}
    public function isFileFormat(int $format): bool {}
    public final static function isValidPharFilename(string $filename, bool $executable = true): bool {}
    /**
     * Returns true if the tar/zip archive can be modified
     */
     public function isWritable(): bool {}
    public final static function loadPhar(string $filename, ?string $alias = NULL): bool {}
    public final static function mapPhar(?string $alias = NULL, int $offset = 0): bool {}
    public final static function mount(string $pharPath, string $externalPath): void {}
    public final static function mungServer(array $variables): void {}
    public function offsetExists($localName): bool {}
    public function offsetGet($localName): \SplFileInfo {}
    /**
     * Set the contents of a file within the tar/zip to those of an external file or string
     */
     public function offsetSet($localName, $value): void {}
    /**
     * Remove a file from a tar/zip archive
     */
     public function offsetUnset($localName): void {}
    public final static function running(bool $returnPhar = true): string {}
    /**
     * Dummy function (Phar::setAlias is not valid for PharData)
     */
     public function setAlias(string $alias): bool {}
    /**
     * Dummy function (Phar::setDefaultStub is not valid for PharData)
     */
     public function setDefaultStub(?string $index = NULL, ?string $webIndex = NULL): bool {}
    /**
     * Sets phar archive meta-data
     */
     public function setMetadata(mixed $metadata): void {}
    /**
     * Set the signature algorithm for a phar and apply it
     */
     public function setSignatureAlgorithm(int $algo, ?string $privateKey = NULL): void {}
    /**
     * Dummy function (Phar::setStub is not valid for PharData)
     */
     public function setStub($stub, int $length = null): true {}
    public function startBuffering(): void {}
    public function stopBuffering(): void {}
    public final static function unlinkArchive(string $filename): true {}
    public final static function webPhar(?string $alias = NULL, ?string $index = NULL, ?string $fileNotFoundScript = NULL, array $mimeTypes = [], ?callable $rewrite = NULL): void {}
}

/**
 * The PharException class
 */
 class PharException extends \Exception implements \Stringable, \Throwable {
}

/**
 * The PharFileInfo class
 */
 class PharFileInfo extends \SplFileInfo implements \Stringable {
    /**
     * Construct a Phar entry object
     */
     public function __construct(string $filename) {}
    public function __destruct() {}
    /**
     * Sets file-specific permission bits
     */
     public function chmod(int $perms): void {}
    /**
     * Compresses the current Phar entry with either zlib or bzip2 compression
     */
     public function compress(int $compression): true {}
    /**
     * Decompresses the current Phar entry within the phar
     */
     public function decompress(): true {}
    /**
     * Deletes the metadata of the entry
     */
     public function delMetadata(): true {}
    /**
     * Returns CRC32 code or throws an exception if CRC has not been verified
     */
     public function getCRC32(): int {}
    /**
     * Returns the actual size of the file (with compression) inside the Phar archive
     */
     public function getCompressedSize(): int {}
    /**
     * Get the complete file contents of the entry
     */
     public function getContent(): string {}
    /**
     * Returns file-specific meta-data saved with a file
     */
     public function getMetadata(array $unserializeOptions = []): mixed {}
    /**
     * Returns the Phar file entry flags
     */
     public function getPharFlags(): int {}
    /**
     * Returns the metadata of the entry
     */
     public function hasMetadata(): bool {}
    /**
     * Returns whether file entry has had its CRC verified
     */
     public function isCRCChecked(): bool {}
    /**
     * Returns whether the entry is compressed
     */
     public function isCompressed(?int $compression = NULL): bool {}
    /**
     * Sets file-specific meta-data saved with a file
     */
     public function setMetadata(mixed $metadata): void {}
}

/**
 * The PhpToken class
 */
 class PhpToken implements \Stringable {
    public int $id;
    public int $line;
    public int $pos;
    public string $text;
    /**
     * Returns a new PhpToken object
     */
     public final function __construct(int $id, string $text, int $line = -1, int $pos = -1) {}
    public function __toString(): string {}
    /**
     * Returns the name of the token.
     */
     public function getTokenName(): ?string {}
    /**
     * Tells whether the token is of given kind.
     */
     public function is($kind): bool {}
    /**
     * Tells whether the token would be ignored by the PHP parser.
     */
     public function isIgnorable(): bool {}
    /**
     * Splits given source into PHP tokens, represented by PhpToken objects.
     */
     public static function tokenize(string $code, int $flags = 0): array {}
}

enum PropertyHookType implements \BackedEnum, \UnitEnum {
    public readonly string $name;
    public readonly string $value;
    public static function cases(): array {}
    public static function from(string|int $value): static {}
    public static function tryFrom(string|int $value): ?static {}
}

/**
 * The RangeException class
 */
 class RangeException extends \RuntimeException implements \Stringable, \Throwable {
}

/**
 * The RecursiveArrayIterator class
 */
 class RecursiveArrayIterator extends \ArrayIterator implements \ArrayAccess, \Countable, \Iterator, \RecursiveIterator, \SeekableIterator, \Serializable, \Traversable {
    public const CHILD_ARRAYS_ONLY = 4;
    /**
     * Returns an iterator for the current entry if it is an array or an object
     */
     public function getChildren(): ?\RecursiveArrayIterator {}
    /**
     * Returns whether current entry is an array or an object
     */
     public function hasChildren(): bool {}
}

/**
 * The RecursiveCachingIterator class
 */
 class RecursiveCachingIterator extends \CachingIterator implements \ArrayAccess, \Countable, \Iterator, \OuterIterator, \RecursiveIterator, \Stringable, \Traversable {
    /**
     * Construct
     */
     public function __construct(\Iterator $iterator, int $flags = RecursiveCachingIterator::CALL_TOSTRING) {}
    /**
     * Return the inner iterator's children as a RecursiveCachingIterator
     */
     public function getChildren(): ?\RecursiveCachingIterator {}
    /**
     * Check whether the current element of the inner iterator has children
     */
     public function hasChildren(): bool {}
}

/**
 * The RecursiveCallbackFilterIterator class
 */
 class RecursiveCallbackFilterIterator extends \CallbackFilterIterator implements \Iterator, \OuterIterator, \RecursiveIterator, \Traversable {
    /**
     * Create a RecursiveCallbackFilterIterator from a RecursiveIterator
     */
     public function __construct(\RecursiveIterator $iterator, callable $callback) {}
    /**
     * Return the inner iterator's children contained in a RecursiveCallbackFilterIterator
     */
     public function getChildren(): \RecursiveCallbackFilterIterator {}
    /**
     * Check whether the inner iterator's current element has children
     */
     public function hasChildren(): bool {}
}

/**
 * The RecursiveDirectoryIterator class
 */
 class RecursiveDirectoryIterator extends \FilesystemIterator implements \Iterator, \RecursiveIterator, \SeekableIterator, \Stringable, \Traversable {
    /**
     * Constructs a RecursiveDirectoryIterator
     */
     public function __construct(string $directory, int $flags = 0) {}
    /**
     * Returns an iterator for the current entry if it is a directory
     */
     public function getChildren(): \RecursiveDirectoryIterator {}
    /**
     * Get sub path
     */
     public function getSubPath(): string {}
    /**
     * Get sub path and name
     */
     public function getSubPathname(): string {}
    /**
     * Returns whether current entry is a directory and not '.' or '..'
     */
     public function hasChildren(bool $allowLinks = false): bool {}
}

/**
 * The RecursiveFilterIterator class
 */
 abstract class RecursiveFilterIterator extends \FilterIterator implements \Iterator, \OuterIterator, \RecursiveIterator, \Traversable {
    /**
     * Create a RecursiveFilterIterator from a RecursiveIterator
     */
     public function __construct(\RecursiveIterator $iterator) {}
    /**
     * Return the inner iterator's children contained in a RecursiveFilterIterator
     */
     public function getChildren(): ?\RecursiveFilterIterator {}
    /**
     * Check whether the inner iterator's current element has children
     */
     public function hasChildren(): bool {}
}

/**
 * The RecursiveIterator interface
 */
 interface RecursiveIterator extends \Iterator, \Traversable {
    /**
     * Returns an iterator for the current entry
     */
     public abstract function getChildren(): ?\RecursiveIterator;
    /**
     * Returns if an iterator can be created for the current entry
     */
     public abstract function hasChildren(): bool;
}

/**
 * The RecursiveIteratorIterator class
 */
 class RecursiveIteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    public const CATCH_GET_CHILD = 16;
    public const CHILD_FIRST = 2;
    public const LEAVES_ONLY = 0;
    public const SELF_FIRST = 1;
    /**
     * Construct a RecursiveIteratorIterator
     */
     public function __construct(\Traversable $iterator, int $mode = RecursiveIteratorIterator::LEAVES_ONLY, int $flags = 0) {}
    /**
     * Begin children
     */
     public function beginChildren(): void {}
    /**
     * Begin Iteration
     */
     public function beginIteration(): void {}
    /**
     * Get children
     */
     public function callGetChildren(): ?\RecursiveIterator {}
    /**
     * Has children
     */
     public function callHasChildren(): bool {}
    /**
     * Access the current element value
     */
     public function current(): mixed {}
    /**
     * End children
     */
     public function endChildren(): void {}
    /**
     * End Iteration
     */
     public function endIteration(): void {}
    /**
     * Get the current depth of the recursive iteration
     */
     public function getDepth(): int {}
    /**
     * Get inner iterator
     */
     public function getInnerIterator(): \RecursiveIterator {}
    /**
     * Get max depth
     */
     public function getMaxDepth(): int|false {}
    /**
     * The current active sub iterator
     */
     public function getSubIterator(?int $level = NULL): ?\RecursiveIterator {}
    /**
     * Access the current key
     */
     public function key(): mixed {}
    /**
     * Move forward to the next element
     */
     public function next(): void {}
    /**
     * Next element
     */
     public function nextElement(): void {}
    /**
     * Rewind the iterator to the first element of the top level inner iterator
     */
     public function rewind(): void {}
    /**
     * Set max depth
     */
     public function setMaxDepth(int $maxDepth = -1): void {}
    /**
     * Check whether the current position is valid
     */
     public function valid(): bool {}
}

/**
 * The RecursiveRegexIterator class
 */
 class RecursiveRegexIterator extends \RegexIterator implements \Iterator, \OuterIterator, \RecursiveIterator, \Traversable {
    /**
     * Creates a new RecursiveRegexIterator
     */
     public function __construct(\RecursiveIterator $iterator, string $pattern, int $mode = RecursiveRegexIterator::MATCH, int $flags = 0, int $pregFlags = 0) {}
    public function accept(): bool {}
    /**
     * Returns an iterator for the current entry
     */
     public function getChildren(): \RecursiveRegexIterator {}
    /**
     * Returns whether an iterator can be obtained for the current entry
     */
     public function hasChildren(): bool {}
}

/**
 * The RecursiveTreeIterator class
 */
 class RecursiveTreeIterator extends \RecursiveIteratorIterator implements \Iterator, \OuterIterator, \Traversable {
    public const BYPASS_CURRENT = 4;
    public const BYPASS_KEY = 8;
    public const PREFIX_END_HAS_NEXT = 3;
    public const PREFIX_END_LAST = 4;
    public const PREFIX_LEFT = 0;
    public const PREFIX_MID_HAS_NEXT = 1;
    public const PREFIX_MID_LAST = 2;
    public const PREFIX_RIGHT = 5;
    /**
     * Construct a RecursiveTreeIterator
     */
     public function __construct(\RecursiveIterator|\IteratorAggregate $iterator, int $flags = RecursiveTreeIterator::BYPASS_KEY, int $cachingIteratorFlags = CachingIterator::CATCH_GET_CHILD, int $mode = RecursiveTreeIterator::SELF_FIRST) {}
    /**
     * Get current element
     */
     public function current(): mixed {}
    /**
     * Get current entry
     */
     public function getEntry(): string {}
    /**
     * Get the postfix
     */
     public function getPostfix(): string {}
    /**
     * Get the prefix
     */
     public function getPrefix(): string {}
    /**
     * Get the key of the current element
     */
     public function key(): mixed {}
    /**
     * Set postfix
     */
     public function setPostfix(string $postfix): void {}
    /**
     * Set a part of the prefix
     */
     public function setPrefixPart(int $part, string $value): void {}
}

class Redis {
    public const AFTER = "after";
    public const ATOMIC = 0;
    public const BACKOFF_ALGORITHM_CONSTANT = 6;
    public const BACKOFF_ALGORITHM_DECORRELATED_JITTER = 1;
    public const BACKOFF_ALGORITHM_DEFAULT = 0;
    public const BACKOFF_ALGORITHM_EQUAL_JITTER = 3;
    public const BACKOFF_ALGORITHM_EXPONENTIAL = 4;
    public const BACKOFF_ALGORITHM_FULL_JITTER = 2;
    public const BACKOFF_ALGORITHM_UNIFORM = 5;
    public const BEFORE = "before";
    public const COMPRESSION_NONE = 0;
    public const LEFT = "left";
    public const MULTI = 1;
    public const OPT_BACKOFF_ALGORITHM = 12;
    public const OPT_BACKOFF_BASE = 13;
    public const OPT_BACKOFF_CAP = 14;
    public const OPT_COMPRESSION = 7;
    public const OPT_COMPRESSION_LEVEL = 9;
    public const OPT_MAX_RETRIES = 11;
    public const OPT_NULL_MULTIBULK_AS_NULL = 10;
    public const OPT_PACK_IGNORE_NUMBERS = 15;
    public const OPT_PREFIX = 2;
    public const OPT_READ_TIMEOUT = 3;
    public const OPT_REPLY_LITERAL = 8;
    public const OPT_SCAN = 4;
    public const OPT_SERIALIZER = 1;
    public const OPT_TCP_KEEPALIVE = 6;
    public const PIPELINE = 2;
    public const REDIS_HASH = 5;
    public const REDIS_LIST = 3;
    public const REDIS_NOT_FOUND = 0;
    public const REDIS_SET = 2;
    public const REDIS_STREAM = 6;
    public const REDIS_STRING = 1;
    public const REDIS_VECTORSET = 7;
    public const REDIS_ZSET = 4;
    public const RIGHT = "right";
    public const SCAN_NOPREFIX = 3;
    public const SCAN_NORETRY = 0;
    public const SCAN_PREFIX = 2;
    public const SCAN_RETRY = 1;
    public const SERIALIZER_JSON = 4;
    public const SERIALIZER_NONE = 0;
    public const SERIALIZER_PHP = 1;
    public function __construct(?array $options = NULL) {}
    public function __destruct() {}
    public function _compress(string $value): string {}
    public function _pack(mixed $value): string {}
    public function _prefix(string $key): string {}
    public function _serialize(mixed $value): string {}
    public function _uncompress(string $value): string {}
    public function _unpack(string $value): mixed {}
    public function _unserialize(string $value): mixed {}
    public function acl(string $subcmd, string ...$args): mixed {}
    public function append(string $key, mixed $value): \Redis|int|false {}
    public function auth(mixed $credentials): \Redis|bool {}
    public function bgSave(): \Redis|bool {}
    public function bgrewriteaof(): \Redis|bool {}
    public function bitcount(string $key, int $start = 0, int $end = -1, bool $bybit = false): \Redis|int|false {}
    public function bitop(string $operation, string $deskey, string $srckey, string ...$other_keys): \Redis|int|false {}
    public function bitpos(string $key, bool $bit, int $start = 0, int $end = -1, bool $bybit = false): \Redis|int|false {}
    public function blPop(array|string $key_or_keys, string|int|float $timeout_or_key, mixed ...$extra_args): \Redis|array|false|null {}
    public function blmove(string $src, string $dst, string $wherefrom, string $whereto, float $timeout): \Redis|string|false {}
    public function blmpop(float $timeout, array $keys, string $from, int $count = 1): \Redis|array|false|null {}
    public function brPop(array|string $key_or_keys, string|int|float $timeout_or_key, mixed ...$extra_args): \Redis|array|false|null {}
    public function brpoplpush(string $src, string $dst, int|float $timeout): \Redis|string|false {}
    public function bzPopMax(array|string $key, string|int $timeout_or_key, mixed ...$extra_args): \Redis|array|false {}
    public function bzPopMin(array|string $key, string|int $timeout_or_key, mixed ...$extra_args): \Redis|array|false {}
    public function bzmpop(float $timeout, array $keys, string $from, int $count = 1): \Redis|array|false|null {}
    public function clearLastError(): bool {}
    public function clearTransferredBytes(): void {}
    public function client(string $opt, mixed ...$args): mixed {}
    public function close(): bool {}
    public function command(?string $opt = NULL, mixed ...$args): mixed {}
    public function config(string $operation, array|string|null $key_or_settings = NULL, ?string $value = NULL): mixed {}
    public function connect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = NULL, int $retry_interval = 0, float $read_timeout = 0, ?array $context = NULL): bool {}
    public function copy(string $src, string $dst, ?array $options = NULL): \Redis|bool {}
    public function dbSize(): \Redis|int|false {}
    public function debug(string $key): \Redis|string {}
    public function decr(string $key, int $by = 1): \Redis|int|false {}
    public function decrBy(string $key, int $value): \Redis|int|false {}
    public function del(array|string $key, string ...$other_keys): \Redis|int|false {}
    public function delete(array|string $key, string ...$other_keys): \Redis|int|false {}
    public function delifeq(string $key, mixed $value): \Redis|int|false {}
    public function discard(): \Redis|bool {}
    public function dump(string $key): \Redis|string|false {}
    public function echo(string $str): \Redis|string|false {}
    public function eval(string $script, array $args = [], int $num_keys = 0): mixed {}
    public function eval_ro(string $script_sha, array $args = [], int $num_keys = 0): mixed {}
    public function evalsha(string $sha1, array $args = [], int $num_keys = 0): mixed {}
    public function evalsha_ro(string $sha1, array $args = [], int $num_keys = 0): mixed {}
    public function exec(): \Redis|array|false {}
    public function exists(mixed $key, mixed ...$other_keys): \Redis|int|bool {}
    public function expire(string $key, int $timeout, ?string $mode = NULL): \Redis|bool {}
    public function expireAt(string $key, int $timestamp, ?string $mode = NULL): \Redis|bool {}
    public function expiremember(string $key, string $field, int $ttl, ?string $unit = NULL): \Redis|int|false {}
    public function expirememberat(string $key, string $field, int $timestamp): \Redis|int|false {}
    public function expiretime(string $key): \Redis|int|false {}
    public function failover(?array $to = NULL, bool $abort = false, int $timeout = 0): \Redis|bool {}
    public function fcall(string $fn, array $keys = [], array $args = []): mixed {}
    public function fcall_ro(string $fn, array $keys = [], array $args = []): mixed {}
    public function flushAll(?bool $sync = NULL): \Redis|bool {}
    public function flushDB(?bool $sync = NULL): \Redis|bool {}
    public function function(string $operation, mixed ...$args): \Redis|array|string|bool {}
    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ...$other_triples_and_options): \Redis|int|false {}
    public function geodist(string $key, string $src, string $dst, ?string $unit = NULL): \Redis|float|false {}
    public function geohash(string $key, string $member, string ...$other_members): \Redis|array|false {}
    public function geopos(string $key, string $member, string ...$other_members): \Redis|array|false {}
    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed {}
    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed {}
    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []): mixed {}
    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []): mixed {}
    public function geosearch(string $key, array|string $position, array|int|float $shape, string $unit, array $options = []): array {}
    public function geosearchstore(string $dst, string $src, array|string $position, array|int|float $shape, string $unit, array $options = []): \Redis|array|int|false {}
    public function get(string $key): mixed {}
    public function getAuth(): mixed {}
    public function getBit(string $key, int $idx): \Redis|int|false {}
    public function getDBNum(): int {}
    public function getDel(string $key): \Redis|string|bool {}
    public function getEx(string $key, array $options = []): \Redis|string|bool {}
    public function getHost(): string {}
    public function getLastError(): ?string {}
    public function getMode(): int {}
    public function getOption(int $option): mixed {}
    public function getPersistentID(): ?string {}
    public function getPort(): int {}
    public function getRange(string $key, int $start, int $end): \Redis|string|false {}
    public function getReadTimeout(): float {}
    public function getTimeout(): float|false {}
    public function getTransferredBytes(): array {}
    public function getWithMeta(string $key): \Redis|array|false {}
    public function getset(string $key, mixed $value): \Redis|string|false {}
    public function hDel(string $key, string $field, string ...$other_fields): \Redis|int|false {}
    public function hExists(string $key, string $field): \Redis|bool {}
    public function hGet(string $key, string $member): mixed {}
    public function hGetAll(string $key): \Redis|array|false {}
    public function hGetWithMeta(string $key, string $member): mixed {}
    public function hIncrBy(string $key, string $field, int $value): \Redis|int|false {}
    public function hIncrByFloat(string $key, string $field, float $value): \Redis|float|false {}
    public function hKeys(string $key): \Redis|array|false {}
    public function hLen(string $key): \Redis|int|false {}
    public function hMget(string $key, array $fields): \Redis|array|false {}
    public function hMset(string $key, array $fieldvals): \Redis|bool {}
    public function hRandField(string $key, ?array $options = NULL): \Redis|array|string|false {}
    public function hSet(string $key, mixed ...$fields_and_vals): \Redis|int|false {}
    public function hSetNx(string $key, string $field, mixed $value): \Redis|bool {}
    public function hStrLen(string $key, string $field): \Redis|int|false {}
    public function hVals(string $key): \Redis|array|false {}
    public function hexpire(string $key, int $ttl, array $fields, ?string $mode = NULL): \Redis|array|false {}
    public function hexpireat(string $key, int $time, array $fields, ?string $mode = NULL): \Redis|array|false {}
    public function hexpiretime(string $key, array $fields): \Redis|array|false {}
    public function hgetdel(string $key, array $fields): \Redis|array|false {}
    public function hgetex(string $key, array $fields, array|string|null $expiry = NULL): \Redis|array|false {}
    public function hpersist(string $key, array $fields): \Redis|array|false {}
    public function hpexpire(string $key, int $ttl, array $fields, ?string $mode = NULL): \Redis|array|false {}
    public function hpexpireat(string $key, int $mstime, array $fields, ?string $mode = NULL): \Redis|array|false {}
    public function hpexpiretime(string $key, array $fields): \Redis|array|false {}
    public function hpttl(string $key, array $fields): \Redis|array|false {}
    public function hscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): \Redis|array|bool {}
    public function hsetex(string $key, array $fields, ?array $expiry = NULL): \Redis|int|false {}
    public function httl(string $key, array $fields): \Redis|array|false {}
    public function incr(string $key, int $by = 1): \Redis|int|false {}
    public function incrBy(string $key, int $value): \Redis|int|false {}
    public function incrByFloat(string $key, float $value): \Redis|float|false {}
    public function info(string ...$sections): \Redis|array|false {}
    public function isConnected(): bool {}
    public function keys(string $pattern) {}
    public function lInsert(string $key, string $pos, mixed $pivot, mixed $value) {}
    public function lLen(string $key): \Redis|int|false {}
    public function lMove(string $src, string $dst, string $wherefrom, string $whereto): \Redis|string|false {}
    public function lPop(string $key, int $count = 0): \Redis|array|string|bool {}
    public function lPos(string $key, mixed $value, ?array $options = NULL): \Redis|array|int|bool|null {}
    public function lPush(string $key, mixed ...$elements): \Redis|int|false {}
    public function lPushx(string $key, mixed $value): \Redis|int|false {}
    public function lSet(string $key, int $index, mixed $value): \Redis|bool {}
    public function lastSave(): int {}
    public function lcs(string $key1, string $key2, ?array $options = NULL): \Redis|array|string|int|false {}
    public function lindex(string $key, int $index): mixed {}
    public function lmpop(array $keys, string $from, int $count = 1): \Redis|array|false|null {}
    public function lrange(string $key, int $start, int $end): \Redis|array|false {}
    public function lrem(string $key, mixed $value, int $count = 0): \Redis|int|false {}
    public function ltrim(string $key, int $start, int $end): \Redis|bool {}
    public function mget(array $keys): \Redis|array|false {}
    public function migrate(string $host, int $port, array|string $key, int $dstdb, int $timeout, bool $copy = false, bool $replace = false, mixed $credentials = NULL): \Redis|bool {}
    public function move(string $key, int $index): \Redis|bool {}
    public function mset(array $key_values): \Redis|bool {}
    public function msetnx(array $key_values): \Redis|bool {}
    public function multi(int $value = Redis::MULTI): \Redis|bool {}
    public function object(string $subcommand, string $key): \Redis|string|int|false {}
    public function open(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = NULL, int $retry_interval = 0, float $read_timeout = 0, ?array $context = NULL): bool {}
    public function pconnect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = NULL, int $retry_interval = 0, float $read_timeout = 0, ?array $context = NULL): bool {}
    public function persist(string $key): \Redis|bool {}
    public function pexpire(string $key, int $timeout, ?string $mode = NULL): bool {}
    public function pexpireAt(string $key, int $timestamp, ?string $mode = NULL): \Redis|bool {}
    public function pexpiretime(string $key): \Redis|int|false {}
    public function pfadd(string $key, array $elements): \Redis|int {}
    public function pfcount(array|string $key_or_keys): \Redis|int|false {}
    public function pfmerge(string $dst, array $srckeys): \Redis|bool {}
    public function ping(?string $message = NULL): \Redis|string|bool {}
    public function pipeline(): \Redis|bool {}
    public function popen(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = NULL, int $retry_interval = 0, float $read_timeout = 0, ?array $context = NULL): bool {}
    public function psetex(string $key, int $expire, mixed $value): \Redis|bool {}
    public function psubscribe(array $patterns, callable $cb): bool {}
    public function pttl(string $key): \Redis|int|false {}
    public function publish(string $channel, string $message): \Redis|int|false {}
    public function pubsub(string $command, mixed $arg = NULL): mixed {}
    public function punsubscribe(array $patterns): \Redis|array|bool {}
    public function rPop(string $key, int $count = 0): \Redis|array|string|bool {}
    public function rPush(string $key, mixed ...$elements): \Redis|int|false {}
    public function rPushx(string $key, mixed $value): \Redis|int|false {}
    public function randomKey(): \Redis|string|false {}
    public function rawcommand(string $command, mixed ...$args): mixed {}
    public function rename(string $old_name, string $new_name): \Redis|bool {}
    public function renameNx(string $key_src, string $key_dst): \Redis|bool {}
    public function replicaof(?string $host = NULL, int $port = 6379): \Redis|bool {}
    public function reset(): \Redis|bool {}
    public function restore(string $key, int $ttl, string $value, ?array $options = NULL): \Redis|bool {}
    public function role(): mixed {}
    public function rpoplpush(string $srckey, string $dstkey): \Redis|string|false {}
    public function sAdd(string $key, mixed $value, mixed ...$other_values): \Redis|int|false {}
    public function sAddArray(string $key, array $values): int {}
    public function sDiff(string $key, string ...$other_keys): \Redis|array|false {}
    public function sDiffStore(string $dst, string $key, string ...$other_keys): \Redis|int|false {}
    public function sInter(array|string $key, string ...$other_keys): \Redis|array|false {}
    public function sInterStore(array|string $key, string ...$other_keys): \Redis|int|false {}
    public function sMembers(string $key): \Redis|array|false {}
    public function sMisMember(string $key, string $member, string ...$other_members): \Redis|array|false {}
    public function sMove(string $src, string $dst, mixed $value): \Redis|bool {}
    public function sPop(string $key, int $count = 0): \Redis|array|string|false {}
    public function sRandMember(string $key, int $count = 0): mixed {}
    public function sUnion(string $key, string ...$other_keys): \Redis|array|false {}
    public function sUnionStore(string $dst, string $key, string ...$other_keys): \Redis|int|false {}
    public function save(): \Redis|bool {}
    public function scan(string|int|null &$iterator, ?string $pattern = NULL, int $count = 0, ?string $type = NULL): array|false {}
    public function scard(string $key): \Redis|int|false {}
    public function script(string $command, mixed ...$args): mixed {}
    public function select(int $db): \Redis|bool {}
    public function serverName(): string|false {}
    public function serverVersion(): string|false {}
    public function set(string $key, mixed $value, mixed $options = NULL): \Redis|string|bool {}
    public function setBit(string $key, int $idx, bool $value): \Redis|int|false {}
    public function setOption(int $option, mixed $value): bool {}
    public function setRange(string $key, int $index, string $value): \Redis|int|false {}
    public function setex(string $key, int $expire, mixed $value) {}
    public function setnx(string $key, mixed $value): \Redis|bool {}
    public function sintercard(array $keys, int $limit = -1): \Redis|int|false {}
    public function sismember(string $key, mixed $value): \Redis|bool {}
    public function slaveof(?string $host = NULL, int $port = 6379): \Redis|bool {}
    public function slowlog(string $operation, int $length = 0): mixed {}
    public function sort(string $key, ?array $options = NULL): mixed {}
    public function sortAsc(string $key, ?string $pattern = NULL, mixed $get = NULL, int $offset = -1, int $count = -1, ?string $store = NULL): array {}
    public function sortAscAlpha(string $key, ?string $pattern = NULL, mixed $get = NULL, int $offset = -1, int $count = -1, ?string $store = NULL): array {}
    public function sortDesc(string $key, ?string $pattern = NULL, mixed $get = NULL, int $offset = -1, int $count = -1, ?string $store = NULL): array {}
    public function sortDescAlpha(string $key, ?string $pattern = NULL, mixed $get = NULL, int $offset = -1, int $count = -1, ?string $store = NULL): array {}
    public function sort_ro(string $key, ?array $options = NULL): mixed {}
    public function srem(string $key, mixed $value, mixed ...$other_values): \Redis|int|false {}
    public function sscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): array|false {}
    public function ssubscribe(array $channels, callable $cb): bool {}
    public function strlen(string $key): \Redis|int|false {}
    public function subscribe(array $channels, callable $cb): bool {}
    public function sunsubscribe(array $channels): \Redis|array|bool {}
    public function swapdb(int $src, int $dst): \Redis|bool {}
    public function time(): \Redis|array {}
    public function touch(array|string $key_or_array, string ...$more_keys): \Redis|int|false {}
    public function ttl(string $key): \Redis|int|false {}
    public function type(string $key): \Redis|int|false {}
    public function unlink(array|string $key, string ...$other_keys): \Redis|int|false {}
    public function unsubscribe(array $channels): \Redis|array|bool {}
    public function unwatch(): \Redis|bool {}
    public function vadd(string $key, array $values, mixed $element, ?array $options = NULL): \Redis|int|false {}
    public function vcard(string $key): \Redis|int|false {}
    public function vdim(string $key): \Redis|int|false {}
    public function vemb(string $key, mixed $member, bool $raw = false): \Redis|array|false {}
    public function vgetattr(string $key, mixed $member, bool $decode = true): \Redis|array|string|false {}
    public function vinfo(string $key): \Redis|array|false {}
    public function vismember(string $key, mixed $member): \Redis|bool {}
    public function vlinks(string $key, mixed $member, bool $withscores = false): \Redis|array|false {}
    public function vrandmember(string $key, int $count = 0): \Redis|array|string|false {}
    public function vrange(string $key, string $min, string $max, int $count = -1): \Redis|array|false {}
    public function vrem(string $key, mixed $member): \Redis|int|false {}
    public function vsetattr(string $key, mixed $member, array|string $attributes): \Redis|int|false {}
    public function vsim(string $key, mixed $member, ?array $options = NULL): \Redis|array|false {}
    public function wait(int $numreplicas, int $timeout): int|false {}
    public function waitaof(int $numlocal, int $numreplicas, int $timeout): \Redis|array|false {}
    public function watch(array|string $key, string ...$other_keys): \Redis|bool {}
    public function xack(string $key, string $group, array $ids): int|false {}
    public function xadd(string $key, string $id, array $values, int $maxlen = 0, bool $approx = false, bool $nomkstream = false): \Redis|string|false {}
    public function xautoclaim(string $key, string $group, string $consumer, int $min_idle, string $start, int $count = -1, bool $justid = false): \Redis|array|bool {}
    public function xclaim(string $key, string $group, string $consumer, int $min_idle, array $ids, array $options): \Redis|array|bool {}
    public function xdel(string $key, array $ids): \Redis|int|false {}
    public function xgroup(string $operation, ?string $key = NULL, ?string $group = NULL, ?string $id_or_consumer = NULL, bool $mkstream = false, int $entries_read = -2): mixed {}
    public function xinfo(string $operation, ?string $arg1 = NULL, ?string $arg2 = NULL, int $count = -1): mixed {}
    public function xlen(string $key): \Redis|int|false {}
    public function xpending(string $key, string $group, ?string $start = NULL, ?string $end = NULL, int $count = -1, ?string $consumer = NULL): \Redis|array|false {}
    public function xrange(string $key, string $start, string $end, int $count = -1): \Redis|array|bool {}
    public function xread(array $streams, int $count = -1, int $block = -1): \Redis|array|bool {}
    public function xreadgroup(string $group, string $consumer, array $streams, int $count = 1, int $block = 1): \Redis|array|bool {}
    public function xrevrange(string $key, string $end, string $start, int $count = -1): \Redis|array|bool {}
    public function xtrim(string $key, string $threshold, bool $approx = false, bool $minid = false, int $limit = -1): \Redis|int|false {}
    public function zAdd(string $key, array|float $score_or_options, mixed ...$more_scores_and_mems): \Redis|int|float|false {}
    public function zCard(string $key): \Redis|int|false {}
    public function zCount(string $key, string|int $start, string|int $end): \Redis|int|false {}
    public function zIncrBy(string $key, float $value, mixed $member): \Redis|float|false {}
    public function zLexCount(string $key, string $min, string $max): \Redis|int|false {}
    public function zMscore(string $key, mixed $member, mixed ...$other_members): \Redis|array|false {}
    public function zPopMax(string $key, ?int $count = NULL): \Redis|array|false {}
    public function zPopMin(string $key, ?int $count = NULL): \Redis|array|false {}
    public function zRandMember(string $key, ?array $options = NULL): \Redis|array|string {}
    public function zRange(string $key, string|int $start, string|int $end, array|bool|null $options = NULL): \Redis|array|false {}
    public function zRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1): \Redis|array|false {}
    public function zRangeByScore(string $key, string $start, string $end, array $options = []): \Redis|array|false {}
    public function zRank(string $key, mixed $member): \Redis|int|false {}
    public function zRem(mixed $key, mixed $member, mixed ...$other_members): \Redis|int|false {}
    public function zRemRangeByLex(string $key, string $min, string $max): \Redis|int|false {}
    public function zRemRangeByRank(string $key, int $start, int $end): \Redis|int|false {}
    public function zRemRangeByScore(string $key, string $start, string $end): \Redis|int|false {}
    public function zRevRange(string $key, int $start, int $end, mixed $scores = NULL): \Redis|array|false {}
    public function zRevRangeByLex(string $key, string $max, string $min, int $offset = -1, int $count = -1): \Redis|array|false {}
    public function zRevRangeByScore(string $key, string $max, string $min, array|bool $options = []): \Redis|array|false {}
    public function zRevRank(string $key, mixed $member): \Redis|int|false {}
    public function zScore(string $key, mixed $member): \Redis|float|false {}
    public function zdiff(array $keys, ?array $options = NULL): \Redis|array|false {}
    public function zdiffstore(string $dst, array $keys): \Redis|int|false {}
    public function zinter(array $keys, ?array $weights = NULL, ?array $options = NULL): \Redis|array|false {}
    public function zintercard(array $keys, int $limit = -1): \Redis|int|false {}
    public function zinterstore(string $dst, array $keys, ?array $weights = NULL, ?string $aggregate = NULL): \Redis|int|false {}
    public function zmpop(array $keys, string $from, int $count = 1): \Redis|array|false|null {}
    public function zrangestore(string $dstkey, string $srckey, string $start, string $end, array|bool|null $options = NULL): \Redis|int|false {}
    public function zscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): \Redis|array|false {}
    public function zunion(array $keys, ?array $weights = NULL, ?array $options = NULL): \Redis|array|false {}
    public function zunionstore(string $dst, array $keys, ?array $weights = NULL, ?string $aggregate = NULL): \Redis|int|false {}
}

class RedisArray {
    public function __call(string $function_name, array $arguments): mixed {}
    public function __construct(array|string $name_or_hosts, ?array $options = NULL) {}
    public function _continuum(): array|bool {}
    public function _distributor(): callable|bool {}
    public function _function(): callable|bool {}
    public function _hosts(): array|bool {}
    public function _instance(string $host): \Redis|bool|null {}
    public function _rehash(?callable $fn = NULL): ?bool {}
    public function _target(string $key): string|bool|null {}
    public function bgsave(): array {}
    public function del(array|string $key, string ...$otherkeys): int|bool {}
    public function discard(): ?bool {}
    public function exec(): array|bool|null {}
    public function flushall(): array|bool {}
    public function flushdb(): array|bool {}
    public function getOption(int $opt): array|bool {}
    public function hscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): array|bool {}
    public function info(): array|bool {}
    public function keys(string $pattern): array|bool {}
    public function mget(array $keys): array|bool {}
    public function mset(array $pairs): bool {}
    public function multi(string $host, ?int $mode = NULL): \RedisArray|bool {}
    public function ping(): array|bool {}
    public function save(): array|bool {}
    public function scan(string|int|null &$iterator, string $node, ?string $pattern = NULL, int $count = 0): array|bool {}
    public function select(int $index): array|bool {}
    public function setOption(int $opt, string $value): array|bool {}
    public function sscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): array|bool {}
    public function unlink(array|string $key, string ...$otherkeys): int|bool {}
    public function unwatch(): ?bool {}
    public function zscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): array|bool {}
}

class RedisCluster {
    public const FAILOVER_DISTRIBUTE = 2;
    public const FAILOVER_DISTRIBUTE_SLAVES = 3;
    public const FAILOVER_ERROR = 1;
    public const FAILOVER_NONE = 0;
    public const OPT_SLAVE_FAILOVER = 5;
    public function __construct(?string $name, ?array $seeds = NULL, int|float $timeout = 0, int|float $read_timeout = 0, bool $persistent = false, mixed $auth = NULL, ?array $context = NULL) {}
    public function _compress(string $value): string {}
    public function _masters(): array {}
    public function _pack(mixed $value): string {}
    public function _prefix(string $key): string|bool {}
    public function _redir(): ?string {}
    public function _serialize(mixed $value): string|bool {}
    public function _uncompress(string $value): string {}
    public function _unpack(string $value): mixed {}
    public function _unserialize(string $value): mixed {}
    public function acl(array|string $key_or_address, string $subcmd, string ...$args): mixed {}
    public function append(string $key, mixed $value): \RedisCluster|int|bool {}
    public function bgrewriteaof(array|string $key_or_address): \RedisCluster|bool {}
    public function bgsave(array|string $key_or_address): \RedisCluster|bool {}
    public function bitcount(string $key, int $start = 0, int $end = -1, bool $bybit = false): \RedisCluster|int|bool {}
    public function bitop(string $operation, string $deskey, string $srckey, string ...$otherkeys): \RedisCluster|int|bool {}
    public function bitpos(string $key, bool $bit, int $start = 0, int $end = -1, bool $bybit = false): \RedisCluster|int|false {}
    public function blmove(string $src, string $dst, string $wherefrom, string $whereto, float $timeout): \Redis|string|false {}
    public function blmpop(float $timeout, array $keys, string $from, int $count = 1): \RedisCluster|array|false|null {}
    public function blpop(array|string $key, string|int|float $timeout_or_key, mixed ...$extra_args): \RedisCluster|array|false|null {}
    public function brpop(array|string $key, string|int|float $timeout_or_key, mixed ...$extra_args): \RedisCluster|array|false|null {}
    public function brpoplpush(string $srckey, string $deskey, int $timeout): mixed {}
    public function bzmpop(float $timeout, array $keys, string $from, int $count = 1): \RedisCluster|array|false|null {}
    public function bzpopmax(array|string $key, string|int $timeout_or_key, mixed ...$extra_args): array {}
    public function bzpopmin(array|string $key, string|int $timeout_or_key, mixed ...$extra_args): array {}
    public function clearlasterror(): bool {}
    public function cleartransferredbytes(): void {}
    public function client(array|string $key_or_address, string $subcommand, ?string $arg = NULL): array|string|bool {}
    public function close(): bool {}
    public function cluster(array|string $key_or_address, string $command, mixed ...$extra_args): mixed {}
    public function command(mixed ...$extra_args): mixed {}
    public function config(array|string $key_or_address, string $subcommand, mixed ...$extra_args): mixed {}
    public function copy(string $src, string $dst, ?array $options = NULL): \RedisCluster|bool {}
    public function dbsize(array|string $key_or_address): \RedisCluster|int {}
    public function decr(string $key, int $by = 1): \RedisCluster|int|false {}
    public function decrby(string $key, int $value): \RedisCluster|int|false {}
    public function decrbyfloat(string $key, float $value): float {}
    public function del(array|string $key, string ...$other_keys): \RedisCluster|int|false {}
    public function delifeq(string $key, mixed $value): \RedisCluster|int|false {}
    public function discard(): bool {}
    public function dump(string $key): \RedisCluster|string|false {}
    public function echo(array|string $key_or_address, string $msg): \RedisCluster|string|false {}
    public function eval(string $script, array $args = [], int $num_keys = 0): mixed {}
    public function eval_ro(string $script, array $args = [], int $num_keys = 0): mixed {}
    public function evalsha(string $script_sha, array $args = [], int $num_keys = 0): mixed {}
    public function evalsha_ro(string $script_sha, array $args = [], int $num_keys = 0): mixed {}
    public function exec(): array|false {}
    public function exists(mixed $key, mixed ...$other_keys): \RedisCluster|int|bool {}
    public function expire(string $key, int $timeout, ?string $mode = NULL): \RedisCluster|bool {}
    public function expireat(string $key, int $timestamp, ?string $mode = NULL): \RedisCluster|bool {}
    public function expiremember(string $key, string $field, int $ttl, ?string $unit = NULL): \Redis|int|false {}
    public function expirememberat(string $key, string $field, int $timestamp): \Redis|int|false {}
    public function expiretime(string $key): \RedisCluster|int|false {}
    public function flushall(array|string $key_or_address, bool $async = false): \RedisCluster|bool {}
    public function flushdb(array|string $key_or_address, bool $async = false): \RedisCluster|bool {}
    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ...$other_triples_and_options): \RedisCluster|int|false {}
    public function geodist(string $key, string $src, string $dest, ?string $unit = NULL): \RedisCluster|float|false {}
    public function geohash(string $key, string $member, string ...$other_members): \RedisCluster|array|false {}
    public function geopos(string $key, string $member, string ...$other_members): \RedisCluster|array|false {}
    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed {}
    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed {}
    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []): mixed {}
    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []): mixed {}
    public function geosearch(string $key, array|string $position, array|int|float $shape, string $unit, array $options = []): \RedisCluster|array {}
    public function geosearchstore(string $dst, string $src, array|string $position, array|int|float $shape, string $unit, array $options = []): \RedisCluster|array|int|false {}
    public function get(string $key): mixed {}
    public function getWithMeta(string $key): \RedisCluster|array|false {}
    public function getbit(string $key, int $value): \RedisCluster|int|false {}
    public function getdel(string $key): mixed {}
    public function getex(string $key, array $options = []): \RedisCluster|string|false {}
    public function getlasterror(): ?string {}
    public function getmode(): int {}
    public function getoption(int $option): mixed {}
    public function getrange(string $key, int $start, int $end): \RedisCluster|string|false {}
    public function getset(string $key, mixed $value): \RedisCluster|string|bool {}
    public function gettransferredbytes(): array|false {}
    public function hdel(string $key, string $member, string ...$other_members): \RedisCluster|int|false {}
    public function hexists(string $key, string $member): \RedisCluster|bool {}
    public function hexpire(string $key, int $ttl, array $fields, ?string $mode = NULL): \RedisCluster|array|false {}
    public function hexpireat(string $key, int $time, array $fields, ?string $mode = NULL): \RedisCluster|array|false {}
    public function hexpiretime(string $key, array $fields): \RedisCluster|array|false {}
    public function hget(string $key, string $member): mixed {}
    public function hgetWithMeta(string $key, string $member): mixed {}
    public function hgetall(string $key): \RedisCluster|array|false {}
    public function hgetdel(string $key, array $fields): \RedisCluster|array|false {}
    public function hgetex(string $key, array $fields, array|string|null $expiry = NULL): \RedisCluster|array|false {}
    public function hincrby(string $key, string $member, int $value): \RedisCluster|int|false {}
    public function hincrbyfloat(string $key, string $member, float $value): \RedisCluster|float|false {}
    public function hkeys(string $key): \RedisCluster|array|false {}
    public function hlen(string $key): \RedisCluster|int|false {}
    public function hmget(string $key, array $keys): \RedisCluster|array|false {}
    public function hmset(string $key, array $key_values): \RedisCluster|bool {}
    public function hpersist(string $key, array $fields): \RedisCluster|array|false {}
    public function hpexpire(string $key, int $ttl, array $fields, ?string $mode = NULL): \RedisCluster|array|false {}
    public function hpexpireat(string $key, int $mstime, array $fields, ?string $mode = NULL): \RedisCluster|array|false {}
    public function hpexpiretime(string $key, array $fields): \RedisCluster|array|false {}
    public function hpttl(string $key, array $fields): \RedisCluster|array|false {}
    public function hrandfield(string $key, ?array $options = NULL): \RedisCluster|array|string {}
    public function hscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): array|bool {}
    public function hset(string $key, string $member, mixed $value): \RedisCluster|int|false {}
    public function hsetex(string $key, array $fields, ?array $expiry = NULL): \RedisCluster|int|false {}
    public function hsetnx(string $key, string $member, mixed $value): \RedisCluster|bool {}
    public function hstrlen(string $key, string $field): \RedisCluster|int|false {}
    public function httl(string $key, array $fields): \RedisCluster|array|false {}
    public function hvals(string $key): \RedisCluster|array|false {}
    public function incr(string $key, int $by = 1): \RedisCluster|int|false {}
    public function incrby(string $key, int $value): \RedisCluster|int|false {}
    public function incrbyfloat(string $key, float $value): \RedisCluster|float|false {}
    public function info(array|string $key_or_address, string ...$sections): \RedisCluster|array|false {}
    public function keys(string $pattern): \RedisCluster|array|false {}
    public function lastsave(array|string $key_or_address): \RedisCluster|int|false {}
    public function lcs(string $key1, string $key2, ?array $options = NULL): \RedisCluster|array|string|int|false {}
    public function lget(string $key, int $index): \RedisCluster|string|bool {}
    public function lindex(string $key, int $index): mixed {}
    public function linsert(string $key, string $pos, mixed $pivot, mixed $value): \RedisCluster|int|false {}
    public function llen(string $key): \RedisCluster|int|bool {}
    public function lmove(string $src, string $dst, string $wherefrom, string $whereto): \Redis|string|false {}
    public function lmpop(array $keys, string $from, int $count = 1): \RedisCluster|array|false|null {}
    public function lpop(string $key, int $count = 0): \RedisCluster|array|string|bool {}
    public function lpos(string $key, mixed $value, ?array $options = NULL): \Redis|array|int|bool|null {}
    public function lpush(string $key, mixed $value, mixed ...$other_values): \RedisCluster|int|bool {}
    public function lpushx(string $key, mixed $value): \RedisCluster|int|bool {}
    public function lrange(string $key, int $start, int $end): \RedisCluster|array|false {}
    public function lrem(string $key, mixed $value, int $count = 0): \RedisCluster|int|bool {}
    public function lset(string $key, int $index, mixed $value): \RedisCluster|bool {}
    public function ltrim(string $key, int $start, int $end): \RedisCluster|bool {}
    public function mget(array $keys): \RedisCluster|array|false {}
    public function mset(array $key_values): \RedisCluster|bool {}
    public function msetnx(array $key_values): \RedisCluster|array|false {}
    public function multi(int $value = Redis::MULTI): \RedisCluster|bool {}
    public function object(string $subcommand, string $key): \RedisCluster|string|int|false {}
    public function persist(string $key): \RedisCluster|bool {}
    public function pexpire(string $key, int $timeout, ?string $mode = NULL): \RedisCluster|bool {}
    public function pexpireat(string $key, int $timestamp, ?string $mode = NULL): \RedisCluster|bool {}
    public function pexpiretime(string $key): \RedisCluster|int|false {}
    public function pfadd(string $key, array $elements): \RedisCluster|bool {}
    public function pfcount(string $key): \RedisCluster|int|false {}
    public function pfmerge(string $key, array $keys): \RedisCluster|bool {}
    public function ping(array|string $key_or_address, ?string $message = NULL): mixed {}
    public function psetex(string $key, int $timeout, string $value): \RedisCluster|bool {}
    public function psubscribe(array $patterns, callable $callback): void {}
    public function pttl(string $key): \RedisCluster|int|false {}
    public function publish(string $channel, string $message): \RedisCluster|int|bool {}
    public function pubsub(array|string $key_or_address, string ...$values): mixed {}
    public function punsubscribe(string $pattern, string ...$other_patterns): array|bool {}
    public function randomkey(array|string $key_or_address): \RedisCluster|string|bool {}
    public function rawcommand(array|string $key_or_address, string $command, mixed ...$args): mixed {}
    public function rename(string $key_src, string $key_dst): \RedisCluster|bool {}
    public function renamenx(string $key, string $newkey): \RedisCluster|bool {}
    public function restore(string $key, int $timeout, string $value, ?array $options = NULL): \RedisCluster|bool {}
    public function role(array|string $key_or_address): mixed {}
    public function rpop(string $key, int $count = 0): \RedisCluster|array|string|bool {}
    public function rpoplpush(string $src, string $dst): \RedisCluster|string|bool {}
    public function rpush(string $key, mixed ...$elements): \RedisCluster|int|false {}
    public function rpushx(string $key, string $value): \RedisCluster|int|bool {}
    public function sadd(string $key, mixed $value, mixed ...$other_values): \RedisCluster|int|false {}
    public function saddarray(string $key, array $values): \RedisCluster|int|bool {}
    public function save(array|string $key_or_address): \RedisCluster|bool {}
    public function scan(string|int|null &$iterator, array|string $key_or_address, ?string $pattern = NULL, int $count = 0): array|bool {}
    public function scard(string $key): \RedisCluster|int|false {}
    public function script(array|string $key_or_address, mixed ...$args): mixed {}
    public function sdiff(string $key, string ...$other_keys): \RedisCluster|array|false {}
    public function sdiffstore(string $dst, string $key, string ...$other_keys): \RedisCluster|int|false {}
    public function set(string $key, mixed $value, mixed $options = NULL): \RedisCluster|string|bool {}
    public function setbit(string $key, int $offset, bool $onoff): \RedisCluster|int|false {}
    public function setex(string $key, int $expire, mixed $value): \RedisCluster|bool {}
    public function setnx(string $key, mixed $value): \RedisCluster|bool {}
    public function setoption(int $option, mixed $value): bool {}
    public function setrange(string $key, int $offset, string $value): \RedisCluster|int|false {}
    public function sinter(array|string $key, string ...$other_keys): \RedisCluster|array|false {}
    public function sintercard(array $keys, int $limit = -1): \RedisCluster|int|false {}
    public function sinterstore(array|string $key, string ...$other_keys): \RedisCluster|int|false {}
    public function sismember(string $key, mixed $value): \RedisCluster|bool {}
    public function slowlog(array|string $key_or_address, mixed ...$args): mixed {}
    public function smembers(string $key): \RedisCluster|array|false {}
    public function smismember(string $key, string $member, string ...$other_members): \RedisCluster|array|false {}
    public function smove(string $src, string $dst, string $member): \RedisCluster|bool {}
    public function sort(string $key, ?array $options = NULL): \RedisCluster|array|string|int|bool {}
    public function sort_ro(string $key, ?array $options = NULL): \RedisCluster|array|string|int|bool {}
    public function spop(string $key, int $count = 0): \RedisCluster|array|string|false {}
    public function srandmember(string $key, int $count = 0): \RedisCluster|array|string|false {}
    public function srem(string $key, mixed $value, mixed ...$other_values): \RedisCluster|int|false {}
    public function sscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): array|false {}
    public function strlen(string $key): \RedisCluster|int|false {}
    public function subscribe(array $channels, callable $cb): void {}
    public function sunion(string $key, string ...$other_keys): \RedisCluster|array|bool {}
    public function sunionstore(string $dst, string $key, string ...$other_keys): \RedisCluster|int|false {}
    public function time(array|string $key_or_address): \RedisCluster|array|bool {}
    public function touch(mixed $key, mixed ...$other_keys): \RedisCluster|int|bool {}
    public function ttl(string $key): \RedisCluster|int|false {}
    public function type(string $key): \RedisCluster|int|false {}
    public function unlink(array|string $key, string ...$other_keys): \RedisCluster|int|false {}
    public function unsubscribe(array $channels): array|bool {}
    public function unwatch(): bool {}
    public function vadd(string $key, array $values, mixed $element, ?array $options = NULL): \RedisCluster|int|false {}
    public function vcard(string $key): \RedisCluster|int|false {}
    public function vdim(string $key): \RedisCluster|int|false {}
    public function vemb(string $key, mixed $member, bool $raw = false): \RedisCluster|array|false {}
    public function vgetattr(string $key, mixed $member, bool $decode = true): \RedisCluster|array|string|false {}
    public function vinfo(string $key): \RedisCluster|array|false {}
    public function vismember(string $key, mixed $member): \RedisCluster|bool {}
    public function vlinks(string $key, mixed $member, bool $withscores = false): \RedisCluster|array|false {}
    public function vrandmember(string $key, int $count = 0): \RedisCluster|array|string|false {}
    public function vrange(string $key, string $min, string $max, int $count = -1): \RedisCluster|array|false {}
    public function vrem(string $key, mixed $member): \RedisCluster|int|false {}
    public function vsetattr(string $key, mixed $member, array|string $attributes): \RedisCluster|int|false {}
    public function vsim(string $key, mixed $member, ?array $options = NULL): \RedisCluster|array|false {}
    public function waitaof(array|string $key_or_address, int $numlocal, int $numreplicas, int $timeout): \RedisCluster|array|false {}
    public function watch(string $key, string ...$other_keys): \RedisCluster|bool {}
    public function xack(string $key, string $group, array $ids): \RedisCluster|int|false {}
    public function xadd(string $key, string $id, array $values, int $maxlen = 0, bool $approx = false): \RedisCluster|string|false {}
    public function xautoclaim(string $key, string $group, string $consumer, int $min_idle, string $start, int $count = -1, bool $justid = false): \RedisCluster|array|bool {}
    public function xclaim(string $key, string $group, string $consumer, int $min_iddle, array $ids, array $options): \RedisCluster|array|string|false {}
    public function xdel(string $key, array $ids): \RedisCluster|int|false {}
    public function xgroup(string $operation, ?string $key = NULL, ?string $group = NULL, ?string $id_or_consumer = NULL, bool $mkstream = false, int $entries_read = -2): mixed {}
    public function xinfo(string $operation, ?string $arg1 = NULL, ?string $arg2 = NULL, int $count = -1): mixed {}
    public function xlen(string $key): \RedisCluster|int|false {}
    public function xpending(string $key, string $group, ?string $start = NULL, ?string $end = NULL, int $count = -1, ?string $consumer = NULL): \RedisCluster|array|false {}
    public function xrange(string $key, string $start, string $end, int $count = -1): \RedisCluster|array|bool {}
    public function xread(array $streams, int $count = -1, int $block = -1): \RedisCluster|array|bool {}
    public function xreadgroup(string $group, string $consumer, array $streams, int $count = 1, int $block = 1): \RedisCluster|array|bool {}
    public function xrevrange(string $key, string $start, string $end, int $count = -1): \RedisCluster|array|bool {}
    public function xtrim(string $key, int $maxlen, bool $approx = false, bool $minid = false, int $limit = -1): \RedisCluster|int|false {}
    public function zadd(string $key, array|float $score_or_options, mixed ...$more_scores_and_mems): \RedisCluster|int|float|false {}
    public function zcard(string $key): \RedisCluster|int|false {}
    public function zcount(string $key, string $start, string $end): \RedisCluster|int|false {}
    public function zdiff(array $keys, ?array $options = NULL): \RedisCluster|array|false {}
    public function zdiffstore(string $dst, array $keys): \RedisCluster|int|false {}
    public function zincrby(string $key, float $value, string $member): \RedisCluster|float|false {}
    public function zinter(array $keys, ?array $weights = NULL, ?array $options = NULL): \RedisCluster|array|false {}
    public function zintercard(array $keys, int $limit = -1): \RedisCluster|int|false {}
    public function zinterstore(string $dst, array $keys, ?array $weights = NULL, ?string $aggregate = NULL): \RedisCluster|int|false {}
    public function zlexcount(string $key, string $min, string $max): \RedisCluster|int|false {}
    public function zmpop(array $keys, string $from, int $count = 1): \RedisCluster|array|false|null {}
    public function zmscore(string $key, mixed $member, mixed ...$other_members): \Redis|array|false {}
    public function zpopmax(string $key, ?int $value = NULL): \RedisCluster|array|bool {}
    public function zpopmin(string $key, ?int $value = NULL): \RedisCluster|array|bool {}
    public function zrandmember(string $key, ?array $options = NULL): \RedisCluster|array|string {}
    public function zrange(string $key, mixed $start, mixed $end, array|bool|null $options = NULL): \RedisCluster|array|bool {}
    public function zrangebylex(string $key, string $min, string $max, int $offset = -1, int $count = -1): \RedisCluster|array|false {}
    public function zrangebyscore(string $key, string $start, string $end, array $options = []): \RedisCluster|array|false {}
    public function zrangestore(string $dstkey, string $srckey, int $start, int $end, array|bool|null $options = NULL): \RedisCluster|int|false {}
    public function zrank(string $key, mixed $member): \RedisCluster|int|false {}
    public function zrem(string $key, string $value, string ...$other_values): \RedisCluster|int|false {}
    public function zremrangebylex(string $key, string $min, string $max): \RedisCluster|int|false {}
    public function zremrangebyrank(string $key, string $min, string $max): \RedisCluster|int|false {}
    public function zremrangebyscore(string $key, string $min, string $max): \RedisCluster|int|false {}
    public function zrevrange(string $key, string $min, string $max, ?array $options = NULL): \RedisCluster|array|bool {}
    public function zrevrangebylex(string $key, string $min, string $max, ?array $options = NULL): \RedisCluster|array|bool {}
    public function zrevrangebyscore(string $key, string $min, string $max, ?array $options = NULL): \RedisCluster|array|bool {}
    public function zrevrank(string $key, mixed $member): \RedisCluster|int|false {}
    public function zscan(string $key, string|int|null &$iterator, ?string $pattern = NULL, int $count = 0): \RedisCluster|array|bool {}
    public function zscore(string $key, mixed $member): \RedisCluster|float|false {}
    public function zunion(array $keys, ?array $weights = NULL, ?array $options = NULL): \RedisCluster|array|false {}
    public function zunionstore(string $dst, array $keys, ?array $weights = NULL, ?string $aggregate = NULL): \RedisCluster|int|false {}
}

class RedisClusterException extends \RuntimeException implements \Stringable, \Throwable {
}

class RedisException extends \RuntimeException implements \Stringable, \Throwable {
}

class RedisSentinel {
    public function __construct(?array $options = NULL) {}
    public function ckquorum(string $master) {}
    public function failover(string $master) {}
    public function flushconfig() {}
    public function getMasterAddrByName(string $master) {}
    public function master(string $master) {}
    public function masters() {}
    public function myid(): string {}
    public function ping() {}
    public function reset(string $pattern) {}
    public function sentinels(string $master) {}
    public function slaves(string $master) {}
}

/**
 * Reflection 类
 */
 class Reflection {
    /**
     * 获取修饰符的名称
     */
     public static function getModifierNames(int $modifiers): array {}
}

/**
 * ReflectionAttribute 类
 */
 class ReflectionAttribute implements \Reflector, \Stringable {
    public const IS_INSTANCEOF = 2;
    public string $name;
    private function __clone(): void {}
    /**
     * 禁止直接实例化的私有构造函数
     */
     private function __construct() {}
    public function __toString(): string {}
    /**
     * 获取传递给属性的参数
     */
     public function getArguments(): array {}
    /**
     * 获取属性名称
     */
     public function getName(): string {}
    /**
     * 返回属性的目标位掩码
     */
     public function getTarget(): int {}
    /**
     * 返回该名称的属性是否已重复出现在代码元素上
     */
     public function isRepeated(): bool {}
    /**
     * 实例化由 ReflectionAttribute 类和参数表示的属性类
     */
     public function newInstance(): object {}
}

/**
 * ReflectionClass 类
 */
 class ReflectionClass implements \Reflector, \Stringable {
    public const IS_EXPLICIT_ABSTRACT = 64;
    public const IS_FINAL = 32;
    public const IS_IMPLICIT_ABSTRACT = 16;
    public const IS_READONLY = 65536;
    public const SKIP_DESTRUCTOR = 16;
    public const SKIP_INITIALIZATION_ON_SERIALIZE = 8;
    public string $name;
    private function __clone(): void {}
    /**
     * 初始化 ReflectionClass 类
     */
     public function __construct(object|string $objectOrClass) {}
    public function __toString(): string {}
    /**
     * 获取所有属性
     */
     public function getAttributes(?string $name = NULL, int $flags = 0): array {}
    /**
     * 获取已定义的常量
     */
     public function getConstant(string $name): mixed {}
    /**
     * 获取常量
     */
     public function getConstants(?int $filter = NULL): array {}
    /**
     * 获取类的构造函数
     */
     public function getConstructor(): ?\ReflectionMethod {}
    /**
     * 获取默认属性
     */
     public function getDefaultProperties(): array {}
    /**
     * 获取文档注释
     */
     public function getDocComment(): string|false {}
    /**
     * 获取最后一行的行数
     */
     public function getEndLine(): int|false {}
    /**
     * 根据已定义的类获取所在扩展的 ReflectionExtension 对象
     */
     public function getExtension(): ?\ReflectionExtension {}
    /**
     * 获取定义的类所在的扩展的名称
     */
     public function getExtensionName(): string|false {}
    /**
     * 获取定义类的文件名
     */
     public function getFileName(): string|false {}
    /**
     * 获取接口（interface）名称
     */
     public function getInterfaceNames(): array {}
    /**
     * 获取接口
     */
     public function getInterfaces(): array {}
    /**
     * Gets lazy initializer (PHP 8 >= 8.4.0)
     */
     public function getLazyInitializer(object $object): ?callable {}
    /**
     * 获取类方法的 ReflectionMethod
     */
     public function getMethod(string $name): \ReflectionMethod {}
    /**
     * 获取方法的数组
     */
     public function getMethods(?int $filter = NULL): array {}
    /**
     * 获取类的修饰符
     */
     public function getModifiers(): int {}
    /**
     * 获取类名
     */
     public function getName(): string {}
    /**
     * 获取命名空间的名称
     */
     public function getNamespaceName(): string {}
    /**
     * 获取父类
     */
     public function getParentClass(): \ReflectionClass|false {}
    /**
     * 获取属性
     */
     public function getProperties(?int $filter = NULL): array {}
    /**
     * 获取类的一个属性的 ReflectionProperty
     */
     public function getProperty(string $name): \ReflectionProperty {}
    /**
     * Gets a ReflectionClassConstant for a class's constant
     */
     public function getReflectionConstant(string $name): \ReflectionClassConstant|false {}
    /**
     * Gets class constants
     */
     public function getReflectionConstants(?int $filter = NULL): array {}
    /**
     * 获取短名
     */
     public function getShortName(): string {}
    /**
     * 获取起始行号
     */
     public function getStartLine(): int|false {}
    /**
     * 获取静态（static）属性
     */
     public function getStaticProperties(): array {}
    /**
     * 获取静态（static）属性的值
     */
     public function getStaticPropertyValue(string $name, mixed $default = null): mixed {}
    /**
     * 返回 trait 别名数组
     */
     public function getTraitAliases(): array {}
    /**
     * 返回这个类所使用 traits 的名称的数组
     */
     public function getTraitNames(): array {}
    /**
     * 返回这个类所使用的 traits 数组
     */
     public function getTraits(): array {}
    /**
     * 检查常量是否已经定义
     */
     public function hasConstant(string $name): bool {}
    /**
     * 检查方法是否已定义
     */
     public function hasMethod(string $name): bool {}
    /**
     * 检查属性是否已定义
     */
     public function hasProperty(string $name): bool {}
    /**
     * 实现接口
     */
     public function implementsInterface(\ReflectionClass|string $interface): bool {}
    /**
     * 检查是否位于命名空间中
     */
     public function inNamespace(): bool {}
    /**
     * Forces initialization of a lazy object (PHP 8 >= 8.4.0)
     */
     public function initializeLazyObject(object $object): object {}
    /**
     * 检查类是否是抽象类（abstract）
     */
     public function isAbstract(): bool {}
    /**
     * 检查类是否是匿名类
     */
     public function isAnonymous(): bool {}
    /**
     * 返回了一个类是否可复制
     */
     public function isCloneable(): bool {}
    /**
     * Returns whether this is an enum (PHP 8 >= 8.1.0)
     */
     public function isEnum(): bool {}
    /**
     * 检查类是否声明为 final
     */
     public function isFinal(): bool {}
    /**
     * 检查类的实例
     */
     public function isInstance(object $object): bool {}
    /**
     * 检查类是否可实例化
     */
     public function isInstantiable(): bool {}
    /**
     * 检查类是否是接口（interface）
     */
     public function isInterface(): bool {}
    /**
     * 检查类是否由扩展或核心在内部定义
     */
     public function isInternal(): bool {}
    /**
     * Check whether this class is iterable
     */
     public function isIterable(): bool {}
    /**
     * 别名 ReflectionClass::isIterable
     */
     public function isIterateable(): bool {}
    /**
     * Checks if class is readonly (PHP 8 >= 8.2.0)
     */
     public function isReadOnly(): bool {}
    /**
     * 检查是否为子类
     */
     public function isSubclassOf(\ReflectionClass|string $class): bool {}
    /**
     * 返回了是否是 trait
     */
     public function isTrait(): bool {}
    /**
     * Checks if an object is lazy and uninitialized (PHP 8 >= 8.4.0)
     */
     public function isUninitializedLazyObject(object $object): bool {}
    /**
     * 检查是否由用户定义的
     */
     public function isUserDefined(): bool {}
    /**
     * Marks a lazy object as initialized without calling the initializer or factory (PHP 8 >= 8.4.0)
     */
     public function markLazyObjectAsInitialized(object $object): object {}
    /**
     * 从指定的参数创建新类实例
     */
     public function newInstance(mixed ...$args): object {}
    /**
     * 从给出的参数创建一个新的类实例
     */
     public function newInstanceArgs(array $args = []): ?object {}
    /**
     * 创建新的类实例而不调用它的构造函数
     */
     public function newInstanceWithoutConstructor(): object {}
    /**
     * Creates a new lazy ghost instance (PHP 8 >= 8.4.0)
     */
     public function newLazyGhost(callable $initializer, int $options = 0): object {}
    /**
     * Creates a new lazy proxy instance (PHP 8 >= 8.4.0)
     */
     public function newLazyProxy(callable $factory, int $options = 0): object {}
    /**
     * Resets an object and marks it as lazy (PHP 8 >= 8.4.0)
     */
     public function resetAsLazyGhost(object $object, callable $initializer, int $options = 0): void {}
    /**
     * Resets an object and marks it as lazy (PHP 8 >= 8.4.0)
     */
     public function resetAsLazyProxy(object $object, callable $factory, int $options = 0): void {}
    /**
     * 设置 public static 属性的值
     */
     public function setStaticPropertyValue(string $name, mixed $value): void {}
}

/**
 * The ReflectionClassConstant class
 */
 class ReflectionClassConstant implements \Reflector, \Stringable {
    public const IS_FINAL = 32;
    public const IS_PRIVATE = 4;
    public const IS_PROTECTED = 2;
    public const IS_PUBLIC = 1;
    public string $class;
    public string $name;
    private function __clone(): void {}
    /**
     * Constructs a ReflectionClassConstant
     */
     public function __construct(object|string $class, string $constant) {}
    public function __toString(): string {}
    /**
     * Gets Attributes
     */
     public function getAttributes(?string $name = NULL, int $flags = 0): array {}
    /**
     * Gets declaring class
     */
     public function getDeclaringClass(): \ReflectionClass {}
    /**
     * Gets doc comments
     */
     public function getDocComment(): string|false {}
    /**
     * Gets the class constant modifiers
     */
     public function getModifiers(): int {}
    /**
     * Get name of the constant
     */
     public function getName(): string {}
    /**
     * Gets a class constant's type (PHP 8 >= 8.3.0)
     */
     public function getType(): ?\ReflectionType {}
    /**
     * Gets value
     */
     public function getValue(): mixed {}
    /**
     * Checks if class constant has a type (PHP 8 >= 8.3.0)
     */
     public function hasType(): bool {}
    /**
     * Checks if deprecated (PHP 8 >= 8.4.0)
     */
     public function isDeprecated(): bool {}
    /**
     * Checks if class constant is an Enum case (PHP 8 >= 8.1.0)
     */
     public function isEnumCase(): bool {}
    /**
     * Checks if class constant is final (PHP 8 >= 8.1.0)
     */
     public function isFinal(): bool {}
    /**
     * Checks if class constant is private
     */
     public function isPrivate(): bool {}
    /**
     * Checks if class constant is protected
     */
     public function isProtected(): bool {}
    /**
     * Checks if class constant is public
     */
     public function isPublic(): bool {}
}

/**
 * The ReflectionConstant class (PHP 8 >= 8.4.0)
 */
 class ReflectionConstant implements \Reflector, \Stringable {
    public string $name;
    /**
     * Constructs a ReflectionConstant (PHP 8 >= 8.4.0)
     */
     public function __construct(string $name) {}
    public function __toString(): string {}
    /**
     * Gets Attributes
     */
     public function getAttributes(?string $name = NULL, int $flags = 0): array {}
    /**
     * Gets ReflectionExtension of the defining extension (PHP 8 >= 8.5.0)
     */
     public function getExtension(): ?\ReflectionExtension {}
    /**
     * Gets name of the defining extension (PHP 8 >= 8.5.0)
     */
     public function getExtensionName(): string|false {}
    /**
     * Gets name of the defining file (PHP 8 >= 8.5.0)
     */
     public function getFileName(): string|false {}
    /**
     * Gets name (PHP 8 >= 8.4.0)
     */
     public function getName(): string {}
    /**
     * Gets namespace name (PHP 8 >= 8.4.0)
     */
     public function getNamespaceName(): string {}
    /**
     * Gets short name (PHP 8 >= 8.4.0)
     */
     public function getShortName(): string {}
    /**
     * Gets value (PHP 8 >= 8.4.0)
     */
     public function getValue(): mixed {}
    /**
     * Checks if deprecated (PHP 8 >= 8.4.0)
     */
     public function isDeprecated(): bool {}
}

/**
 * ReflectionEnum 类 (PHP 8 >= 8.1.0)
 */
 class ReflectionEnum extends \ReflectionClass implements \Reflector, \Stringable {
    /**
     * 实例化 ReflectionEnum 对象 (PHP 8 >= 8.1.0)
     */
     public function __construct(object|string $objectOrClass) {}
    /**
     * 获取枚举回退的类型 (PHP 8 >= 8.1.0)
     */
     public function getBackingType(): ?\ReflectionNamedType {}
    /**
     * 返回指定的枚举条目 (PHP 8 >= 8.1.0)
     */
     public function getCase(string $name): \ReflectionEnumUnitCase {}
    /**
     * 返回枚举中的所有条目的清单 (PHP 8 >= 8.1.0)
     */
     public function getCases(): array {}
    /**
     * 在枚举上检测条目 (PHP 8 >= 8.1.0)
     */
     public function hasCase(string $name): bool {}
    /**
     * 检测 Enum 是否为回退（Backed）Enum (PHP 8 >= 8.1.0)
     */
     public function isBacked(): bool {}
}

/**
 * ReflectionEnumBackedCase 类 (PHP 8 >= 8.1.0)
 */
 class ReflectionEnumBackedCase extends \ReflectionEnumUnitCase implements \Reflector, \Stringable {
    /**
     * Instantiates a ReflectionEnumBackedCase object (PHP 8 >= 8.1.0)
     */
     public function __construct(object|string $class, string $constant) {}
    /**
     * 获取枚举条目回退的标量值 (PHP 8 >= 8.1.0)
     */
     public function getBackingValue(): string|int {}
}

/**
 * ReflectionEnumUnitCase 类 (PHP 8 >= 8.1.0)
 */
 class ReflectionEnumUnitCase extends \ReflectionClassConstant implements \Reflector, \Stringable {
    /**
     * Instantiates a ReflectionEnumUnitCase object (PHP 8 >= 8.1.0)
     */
     public function __construct(object|string $class, string $constant) {}
    /**
     * 获取该枚举条目的反射 (PHP 8 >= 8.1.0)
     */
     public function getEnum(): \ReflectionEnum {}
    /**
     * 获取反射对象描述的枚举条目对象 (PHP 8 >= 8.1.0)
     */
     public function getValue(): \UnitEnum {}
}

/**
 * ReflectionException 类
 */
 class ReflectionException extends \Exception implements \Stringable, \Throwable {
}

/**
 * ReflectionExtension 类
 */
 class ReflectionExtension implements \Reflector, \Stringable {
    public string $name;
    private function __clone(): void {}
    /**
     * 构造 ReflectionExtension
     */
     public function __construct(string $name) {}
    public function __toString(): string {}
    /**
     * 获取类名列表
     */
     public function getClassNames(): array {}
    /**
     * 获取类列表
     */
     public function getClasses(): array {}
    /**
     * 获取常量
     */
     public function getConstants(): array {}
    /**
     * 获取依赖
     */
     public function getDependencies(): array {}
    /**
     * 获取扩展中的函数
     */
     public function getFunctions(): array {}
    /**
     * 获取 ini 配置
     */
     public function getINIEntries(): array {}
    /**
     * 获取扩展名称
     */
     public function getName(): string {}
    /**
     * 获取扩展版本
     */
     public function getVersion(): ?string {}
    /**
     * 输出扩展信息
     */
     public function info(): void {}
    /**
     * 返回扩展是否持久化的
     */
     public function isPersistent(): bool {}
    /**
     * 返回扩展是否是临时载入
     */
     public function isTemporary(): bool {}
}

/**
 * ReflectionFiber 类 (PHP 8 >= 8.1.0)
 */
 final class ReflectionFiber {
    /**
     * Constructs a ReflectionFiber object (PHP 8 >= 8.1.0)
     */
     public function __construct(\Fiber $fiber) {}
    /**
     * Gets the callable used to create the Fiber (PHP 8 >= 8.1.0)
     */
     public function getCallable(): callable {}
    /**
     * Get the file name of the current execution point (PHP 8 >= 8.1.0)
     */
     public function getExecutingFile(): ?string {}
    /**
     * Get the line number of the current execution point (PHP 8 >= 8.1.0)
     */
     public function getExecutingLine(): ?int {}
    /**
     * Get the reflected Fiber instance (PHP 8 >= 8.1.0)
     */
     public function getFiber(): \Fiber {}
    /**
     * Get the backtrace of the current execution point (PHP 8 >= 8.1.0)
     */
     public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array {}
}

/**
 * ReflectionFunction 类
 */
 class ReflectionFunction extends \ReflectionFunctionAbstract implements \Reflector, \Stringable {
    public const IS_DEPRECATED = 2048;
    /**
     * Constructs a ReflectionFunction object
     */
     public function __construct(\Closure|string $function) {}
    public function __toString(): string {}
    /**
     * Returns a dynamically created closure for the function
     */
     public function getClosure(): \Closure {}
    /**
     * Invokes function
     */
     public function invoke(mixed ...$args): mixed {}
    /**
     * Invokes function args
     */
     public function invokeArgs(array $args): mixed {}
    /**
     * Checks if a function is anonymous (PHP 8 >= 8.2.0)
     */
     public function isAnonymous(): bool {}
    /**
     * Checks if function is disabled
     */
     public function isDisabled(): bool {}
}

/**
 * ReflectionFunctionAbstract 类
 */
 abstract class ReflectionFunctionAbstract implements \Reflector, \Stringable {
    public string $name;
    private function __clone(): void {}
    /**
     * Gets Attributes
     */
     public function getAttributes(?string $name = NULL, int $flags = 0): array {}
    /**
     * Returns the class corresponding to static:: inside a closure (PHP 8 >= 8.0.23, PHP 8 >= 8.1.11)
     */
     public function getClosureCalledClass(): ?\ReflectionClass {}
    /**
     * Returns the class corresponding to the scope inside a closure
     */
     public function getClosureScopeClass(): ?\ReflectionClass {}
    /**
     * 返回闭包内与 $this 对应的对象
     */
     public function getClosureThis(): ?object {}
    /**
     * Returns an array of the used variables in the Closure (PHP 8 >= 8.1.0)
     */
     public function getClosureUsedVariables(): array {}
    /**
     * 获取注释内容
     */
     public function getDocComment(): string|false {}
    /**
     * 获取结束行号
     */
     public function getEndLine(): int|false {}
    /**
     * 获取扩展信息
     */
     public function getExtension(): ?\ReflectionExtension {}
    /**
     * 获取扩展名称
     */
     public function getExtensionName(): string|false {}
    /**
     * 获取文件名称
     */
     public function getFileName(): string|false {}
    /**
     * 获取函数名称
     */
     public function getName(): string {}
    /**
     * 获取命名空间
     */
     public function getNamespaceName(): string {}
    /**
     * 获取参数数目
     */
     public function getNumberOfParameters(): int {}
    /**
     * 获取必须输入参数个数
     */
     public function getNumberOfRequiredParameters(): int {}
    /**
     * 获取参数
     */
     public function getParameters(): array {}
    /**
     * Gets the specified return type of a function
     */
     public function getReturnType(): ?\ReflectionType {}
    /**
     * 获取函数短名称
     */
     public function getShortName(): string {}
    /**
     * 获取开始行号
     */
     public function getStartLine(): int|false {}
    /**
     * 获取静态变量
     */
     public function getStaticVariables(): array {}
    /**
     * Returns the tentative return type associated with the function (PHP 8 >= 8.1.0)
     */
     public function getTentativeReturnType(): ?\ReflectionType {}
    /**
     * Checks if the function has a specified return type
     */
     public function hasReturnType(): bool {}
    /**
     * Returns whether the function has a tentative return type (PHP 8 >= 8.1.0)
     */
     public function hasTentativeReturnType(): bool {}
    /**
     * 检查是否处于命名空间
     */
     public function inNamespace(): bool {}
    /**
     * 检查是否是匿名函数
     */
     public function isClosure(): bool {}
    /**
     * 检查是否已经弃用
     */
     public function isDeprecated(): bool {}
    /**
     * 判断函数是否是一个生成器函数
     */
     public function isGenerator(): bool {}
    /**
     * 判断函数是否是内置函数
     */
     public function isInternal(): bool {}
    public function isStatic(): bool {}
    /**
     * 检查是否是用户定义
     */
     public function isUserDefined(): bool {}
    /**
     * Checks if the function is variadic
     */
     public function isVariadic(): bool {}
    /**
     * 检查是否返回引用
     */
     public function returnsReference(): bool {}
}

/**
 * ReflectionGenerator 类
 */
 final class ReflectionGenerator {
    /**
     * Constructs a ReflectionGenerator object
     */
     public function __construct(\Generator $generator) {}
    /**
     * Gets the file name of the currently executing generator
     */
     public function getExecutingFile(): string {}
    /**
     * Gets the executing Generator object
     */
     public function getExecutingGenerator(): \Generator {}
    /**
     * Gets the currently executing line of the generator
     */
     public function getExecutingLine(): int {}
    /**
     * Gets the function name of the generator
     */
     public function getFunction(): \ReflectionFunctionAbstract {}
    /**
     * Gets the $this value of the generator
     */
     public function getThis(): ?object {}
    /**
     * Gets the trace of the executing generator
     */
     public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array {}
    /**
     * Checks if execution finished (PHP 8 >= 8.4.0)
     */
     public function isClosed(): bool {}
}

/**
 * ReflectionIntersectionType 类 (PHP 8 >= 8.1.0)
 */
 class ReflectionIntersectionType extends \ReflectionType implements \Stringable {
    /**
     * 返回包含在交集类型中的类型 (PHP 8 >= 8.1.0)
     */
     public function getTypes(): array {}
}

/**
 * ReflectionMethod 类
 */
 class ReflectionMethod extends \ReflectionFunctionAbstract implements \Reflector, \Stringable {
    public const IS_ABSTRACT = 64;
    public const IS_FINAL = 32;
    public const IS_PRIVATE = 4;
    public const IS_PROTECTED = 2;
    public const IS_PUBLIC = 1;
    public const IS_STATIC = 16;
    public string $class;
    /**
     * 构造 ReflectionMethod
     */
     public function __construct(object|string $objectOrMethod, ?string $method = NULL) {}
    public function __toString(): string {}
    /**
     * Creates a new ReflectionMethod (PHP 8 >= 8.3.0)
     */
     public static function createFromMethodName(string $method): static {}
    /**
     * 返回动态建立的方法调用接口（译者注：可以使用这个返回值直接调用非公开方法）
     */
     public function getClosure(?object $object = NULL): \Closure {}
    /**
     * 获取被反射的方法所在类的反射实例
     */
     public function getDeclaringClass(): \ReflectionClass {}
    /**
     * 获取方法的修饰符
     */
     public function getModifiers(): int {}
    /**
     * 返回方法原型 (如果存在)
     */
     public function getPrototype(): \ReflectionMethod {}
    /**
     * Returns whether a method has a prototype (PHP 8 >= 8.2.0)
     */
     public function hasPrototype(): bool {}
    /**
     * Invoke
     */
     public function invoke(?object $object, mixed ...$args): mixed {}
    /**
     * 带参数执行
     */
     public function invokeArgs(?object $object, array $args): mixed {}
    /**
     * 判断方法是否是抽象方法
     */
     public function isAbstract(): bool {}
    /**
     * 判断方法是否是构造方法
     */
     public function isConstructor(): bool {}
    /**
     * 判断方法是否是析构方法
     */
     public function isDestructor(): bool {}
    /**
     * 判断方法是否定义 final
     */
     public function isFinal(): bool {}
    /**
     * 判断方法是否是私有
     */
     public function isPrivate(): bool {}
    /**
     * 判断方法是否是 protected
     */
     public function isProtected(): bool {}
    /**
     * 判断方法是否是 public
     */
     public function isPublic(): bool {}
    /**
     * 设置方法是否可访问
     */
     public function setAccessible(bool $accessible): void {}
}

/**
 * ReflectionNamedType 类
 */
 class ReflectionNamedType extends \ReflectionType implements \Stringable {
    /**
     * 以字符串形式获取类型的名称
     */
     public function getName(): string {}
    /**
     * 检查它是否是内置类型
     */
     public function isBuiltin(): bool {}
}

/**
 * ReflectionObject 类
 */
 class ReflectionObject extends \ReflectionClass implements \Reflector, \Stringable {
    /**
     * Constructs a ReflectionObject
     */
     public function __construct(object $object) {}
}

/**
 * ReflectionParameter 类
 */
 class ReflectionParameter implements \Reflector, \Stringable {
    public string $name;
    private function __clone(): void {}
    /**
     * Construct
     */
     public function __construct($function, string|int $param) {}
    public function __toString(): string {}
    /**
     * Checks if null is allowed
     */
     public function allowsNull(): bool {}
    /**
     * Returns whether this parameter can be passed by value
     */
     public function canBePassedByValue(): bool {}
    /**
     * Gets Attributes
     */
     public function getAttributes(?string $name = NULL, int $flags = 0): array {}
    /**
     * 获取参数的 ReflectionClass 对象或为 null
     */
     public function getClass(): ?\ReflectionClass {}
    /**
     * Gets declaring class
     */
     public function getDeclaringClass(): ?\ReflectionClass {}
    /**
     * Gets declaring function
     */
     public function getDeclaringFunction(): \ReflectionFunctionAbstract {}
    /**
     * Gets default parameter value
     */
     public function getDefaultValue(): mixed {}
    /**
     * Returns the default value's constant name if default value is constant or null
     */
     public function getDefaultValueConstantName(): ?string {}
    /**
     * Gets parameter name
     */
     public function getName(): string {}
    /**
     * Gets parameter position
     */
     public function getPosition(): int {}
    /**
     * Gets a parameter's type
     */
     public function getType(): ?\ReflectionType {}
    /**
     * Checks if parameter has a type
     */
     public function hasType(): bool {}
    /**
     * Checks if parameter expects an array
     */
     public function isArray(): bool {}
    /**
     * Returns whether parameter MUST be callable
     */
     public function isCallable(): bool {}
    /**
     * 检查默认是否可用
     */
     public function isDefaultValueAvailable(): bool {}
    /**
     * Returns whether the default value of this parameter is a constant
     */
     public function isDefaultValueConstant(): bool {}
    /**
     * Checks if optional
     */
     public function isOptional(): bool {}
    /**
     * Checks if passed by reference
     */
     public function isPassedByReference(): bool {}
    /**
     * Checks if a parameter is promoted to a property
     */
     public function isPromoted(): bool {}
    /**
     * Checks if the parameter is variadic
     */
     public function isVariadic(): bool {}
}

/**
 * ReflectionProperty 类
 */
 class ReflectionProperty implements \Reflector, \Stringable {
    public const IS_ABSTRACT = 64;
    public const IS_FINAL = 32;
    public const IS_PRIVATE = 4;
    public const IS_PRIVATE_SET = 4096;
    public const IS_PROTECTED = 2;
    public const IS_PROTECTED_SET = 2048;
    public const IS_PUBLIC = 1;
    public const IS_READONLY = 128;
    public const IS_STATIC = 16;
    public const IS_VIRTUAL = 512;
    public string $class;
    public string $name;
    private function __clone(): void {}
    /**
     * Construct a ReflectionProperty object
     */
     public function __construct(object|string $class, string $property) {}
    public function __toString(): string {}
    /**
     * Gets Attributes
     */
     public function getAttributes(?string $name = NULL, int $flags = 0): array {}
    /**
     * Gets declaring class
     */
     public function getDeclaringClass(): \ReflectionClass {}
    /**
     * Returns the default value declared for a property
     */
     public function getDefaultValue(): mixed {}
    /**
     * Gets the property doc comment
     */
     public function getDocComment(): string|false {}
    /**
     * Returns a reflection object for a specified hook (PHP 8 >= 8.4.0)
     */
     public function getHook(\PropertyHookType $type): ?\ReflectionMethod {}
    /**
     * Returns an array of all hooks on this property (PHP 8 >= 8.4.0)
     */
     public function getHooks(): array {}
    /**
     * Gets the mangled name of the property
     */
     public function getMangledName(): string {}
    /**
     * Gets the property modifiers
     */
     public function getModifiers(): int {}
    /**
     * Gets property name
     */
     public function getName(): string {}
    /**
     * Returns the value of a property, bypassing a get hook if defined (PHP 8 >= 8.4.0)
     */
     public function getRawValue(object $object): mixed {}
    /**
     * Returns the parameter type of a setter hook (PHP 8 >= 8.4.0)
     */
     public function getSettableType(): ?\ReflectionType {}
    /**
     * Gets a property's type
     */
     public function getType(): ?\ReflectionType {}
    /**
     * Gets value
     */
     public function getValue(?object $object = NULL): mixed {}
    /**
     * Checks if property has a default value declared
     */
     public function hasDefaultValue(): bool {}
    /**
     * Returns whether the property has a given hook defined (PHP 8 >= 8.4.0)
     */
     public function hasHook(\PropertyHookType $type): bool {}
    /**
     * Returns whether the property has any hooks defined (PHP 8 >= 8.4.0)
     */
     public function hasHooks(): bool {}
    /**
     * Checks if property has a type
     */
     public function hasType(): bool {}
    /**
     * Determines if a property is abstract (PHP 8 >= 8.4.0)
     */
     public function isAbstract(): bool {}
    /**
     * Checks if property is a default property
     */
     public function isDefault(): bool {}
    /**
     * Checks if property is a dynamic property (PHP 8 >= 8.4.0)
     */
     public function isDynamic(): bool {}
    /**
     * Determines if this property is final or not (PHP 8 >= 8.4.0)
     */
     public function isFinal(): bool {}
    /**
     * Checks whether a property is initialized
     */
     public function isInitialized(?object $object = NULL): bool {}
    /**
     * Checks whether a property is lazy (PHP 8 >= 8.4.0)
     */
     public function isLazy(object $object): bool {}
    /**
     * Checks if property is private
     */
     public function isPrivate(): bool {}
    /**
     * Checks if property is private for writing (PHP 8 >= 8.4.0)
     */
     public function isPrivateSet(): bool {}
    /**
     * Checks if property is promoted
     */
     public function isPromoted(): bool {}
    /**
     * Checks if property is protected
     */
     public function isProtected(): bool {}
    /**
     * Checks whether the property is protected for writing (PHP 8 >= 8.4.0)
     */
     public function isProtectedSet(): bool {}
    /**
     * Checks if property is public
     */
     public function isPublic(): bool {}
    /**
     * 检查属性是否为只读 (PHP 8 >= 8.1.0)
     */
     public function isReadOnly(): bool {}
    /**
     * Checks if property is static
     */
     public function isStatic(): bool {}
    /**
     * Determines if a property is virtual (PHP 8 >= 8.4.0)
     */
     public function isVirtual(): bool {}
    /**
     * Set property accessibility
     */
     public function setAccessible(bool $accessible): void {}
    /**
     * Sets the value of a property, bypassing a set hook if defined (PHP 8 >= 8.4.0)
     */
     public function setRawValue(object $object, mixed $value): void {}
    /**
     * Set raw property value without triggering lazy initialization (PHP 8 >= 8.4.0)
     */
     public function setRawValueWithoutLazyInitialization(object $object, mixed $value): void {}
    /**
     * Set property value
     */
     public function setValue(mixed $objectOrValue, mixed $value = null): void {}
    /**
     * Marks property as non-lazy (PHP 8 >= 8.4.0)
     */
     public function skipLazyInitialization(object $object): void {}
}

/**
 * ReflectionReference 类
 */
 final class ReflectionReference {
    private function __clone(): void {}
    /**
     * 私有构造函数以禁用直接实例化
     */
     private function __construct() {}
    /**
     * 从数组元素创建一个 ReflectionReference
     */
     public static function fromArrayElement(array $array, string|int $key): ?\ReflectionReference {}
    /**
     * 获取引用的唯一 ID
     */
     public function getId(): string {}
}

/**
 * ReflectionType 类
 */
 abstract class ReflectionType implements \Stringable {
    private function __clone(): void {}
    public function __toString(): string {}
    /**
     * Checks if null is allowed
     */
     public function allowsNull(): bool {}
}

/**
 * ReflectionUnionType 类
 */
 class ReflectionUnionType extends \ReflectionType implements \Stringable {
    /**
     * 返回联合类型中包含的类型
     */
     public function getTypes(): array {}
}

/**
 * ReflectionZendExtension 类
 */
 class ReflectionZendExtension implements \Reflector, \Stringable {
    public string $name;
    private function __clone(): void {}
    /**
     * Constructs a ReflectionZendExtension object
     */
     public function __construct(string $name) {}
    public function __toString(): string {}
    /**
     * Gets author
     */
     public function getAuthor(): string {}
    /**
     * Gets copyright
     */
     public function getCopyright(): string {}
    /**
     * Gets name
     */
     public function getName(): string {}
    /**
     * Gets URL
     */
     public function getURL(): string {}
    /**
     * Gets version
     */
     public function getVersion(): string {}
}

/**
 * Reflector 接口
 */
 interface Reflector extends \Stringable {
}

/**
 * The RegexIterator class
 */
 class RegexIterator extends \FilterIterator implements \Iterator, \OuterIterator, \Traversable {
    public const ALL_MATCHES = 2;
    public const GET_MATCH = 1;
    public const INVERT_MATCH = 2;
    public const MATCH = 0;
    public const REPLACE = 4;
    public const SPLIT = 3;
    public const USE_KEY = 1;
    public ?string $replacement;
    /**
     * Create a new RegexIterator
     */
     public function __construct(\Iterator $iterator, string $pattern, int $mode = RegexIterator::MATCH, int $flags = 0, int $pregFlags = 0) {}
    /**
     * Get accept status
     */
     public function accept(): bool {}
    /**
     * Get flags
     */
     public function getFlags(): int {}
    /**
     * Returns operation mode
     */
     public function getMode(): int {}
    /**
     * Returns the regular expression flags
     */
     public function getPregFlags(): int {}
    /**
     * Returns current regular expression
     */
     public function getRegex(): string {}
    /**
     * Sets the flags
     */
     public function setFlags(int $flags): void {}
    /**
     * Sets the operation mode
     */
     public function setMode(int $mode): void {}
    /**
     * Sets the regular expression flags
     */
     public function setPregFlags(int $pregFlags): void {}
}

/**
 * RequestParseBodyException (PHP 8 >= 8.4.0)
 */
 class RequestParseBodyException extends \Exception implements \Stringable, \Throwable {
}

/**
 * The ResourceBundle class
 */
 class ResourceBundle implements \Countable, \IteratorAggregate, \Traversable {
    public function __construct(?string $locale, ?string $bundle, bool $fallback = true) {}
    /**
     * Get number of elements in the bundle
     */
     public function count(): int {}
    /**
     * Create a resource bundle
     */
     public static function create(?string $locale, ?string $bundle, bool $fallback = true): ?\ResourceBundle {}
    /**
     * Get data from the bundle
     */
     public function get(string|int $index, bool $fallback = true): \ResourceBundle|array|string|int|null {}
    /**
     * Get bundle's last error code
     */
     public function getErrorCode(): int {}
    /**
     * Get bundle's last error message
     */
     public function getErrorMessage(): string {}
    public function getIterator(): \Iterator {}
    public static function getLocales(string $bundle): array|false {}
}

/**
 * ReturnTypeWillChange 注解 (PHP 8 >= 8.1.0)
 */
 final class ReturnTypeWillChange {
    /**
     * 构造新的 ReturnTypeWillChange 注解实例 (PHP 8 >= 8.1.0)
     */
     public function __construct() {}
}

enum RoundingMode implements \UnitEnum {
    public readonly string $name;
    public static function cases(): array {}
}

/**
 * The RuntimeException class
 */
 class RuntimeException extends \Exception implements \Stringable, \Throwable {
}

/**
 * SQLite3 类
 */
 class SQLite3 {
    public const ALTER_TABLE = 26;
    public const ANALYZE = 28;
    public const ATTACH = 24;
    public const COPY = 0;
    public const CREATE_INDEX = 1;
    public const CREATE_TABLE = 2;
    public const CREATE_TEMP_INDEX = 3;
    public const CREATE_TEMP_TABLE = 4;
    public const CREATE_TEMP_TRIGGER = 5;
    public const CREATE_TEMP_VIEW = 6;
    public const CREATE_TRIGGER = 7;
    public const CREATE_VIEW = 8;
    public const CREATE_VTABLE = 29;
    public const DELETE = 9;
    public const DENY = 1;
    public const DETACH = 25;
    public const DROP_INDEX = 10;
    public const DROP_TABLE = 11;
    public const DROP_TEMP_INDEX = 12;
    public const DROP_TEMP_TABLE = 13;
    public const DROP_TEMP_TRIGGER = 14;
    public const DROP_TEMP_VIEW = 15;
    public const DROP_TRIGGER = 16;
    public const DROP_VIEW = 17;
    public const DROP_VTABLE = 30;
    public const FUNCTION = 31;
    public const IGNORE = 2;
    public const INSERT = 18;
    public const OK = 0;
    public const PRAGMA = 19;
    public const READ = 20;
    public const RECURSIVE = 33;
    public const REINDEX = 27;
    public const SAVEPOINT = 32;
    public const SELECT = 21;
    public const TRANSACTION = 22;
    public const UPDATE = 23;
    /**
     * 实例化 SQLite3 对象并打开 SQLite 3 数据库
     */
     public function __construct(string $filename, int $flags = 6, string $encryptionKey = "") {}
    /**
     * Backup one database to another database
     */
     public function backup(\SQLite3 $destination, string $sourceDatabase = "main", string $destinationDatabase = "main"): bool {}
    /**
     * Sets the busy connection handler
     */
     public function busyTimeout(int $milliseconds): bool {}
    /**
     * Returns the number of database rows that were changed (or inserted or
       deleted) by the most recent SQL statement
     */
     public function changes(): int {}
    /**
     * Closes the database connection
     */
     public function close(): bool {}
    /**
     * Registers a PHP function for use as an SQL aggregate function
     */
     public function createAggregate(string $name, callable $stepCallback, callable $finalCallback, int $argCount = -1): bool {}
    /**
     * Registers a PHP function for use as an SQL collating function
     */
     public function createCollation(string $name, callable $callback): bool {}
    /**
     * Registers a PHP function for use as an SQL scalar function
     */
     public function createFunction(string $name, callable $callback, int $argCount = -1, int $flags = 0): bool {}
    /**
     * Enable throwing exceptions
     */
     public function enableExceptions(bool $enable = false): bool {}
    /**
     * Enables or disables the use of extended result codes
     */
     public function enableExtendedResultCodes(bool $enable = true): bool {}
    /**
     * Returns a string that has been properly escaped
     */
     public static function escapeString(string $string): string {}
    /**
     * Executes a result-less query against a given database
     */
     public function exec(string $query): bool {}
    /**
     * Returns the numeric result code of the most recent failed SQLite request
     */
     public function lastErrorCode(): int {}
    /**
     * Returns English text describing the most recent failed SQLite request
     */
     public function lastErrorMsg(): string {}
    /**
     * Returns the numeric extended result code of the most recent failed
       SQLite request
     */
     public function lastExtendedErrorCode(): int {}
    /**
     * Returns the row ID of the most recent INSERT into the database
     */
     public function lastInsertRowID(): int {}
    /**
     * Attempts to load an SQLite extension library
     */
     public function loadExtension(string $name): bool {}
    /**
     * Opens an SQLite database
     */
     public function open(string $filename, int $flags = 6, string $encryptionKey = ""): void {}
    /**
     * Opens a stream resource to read a BLOB
     */
     public function openBlob(string $table, string $column, int $rowid, string $database = "main", int $flags = SQLITE3_OPEN_READONLY) {}
    /**
     * Prepares an SQL statement for execution
     */
     public function prepare(string $query): \SQLite3Stmt|false {}
    /**
     * Executes an SQL query
     */
     public function query(string $query): \SQLite3Result|false {}
    /**
     * Executes a query and returns a single result
     */
     public function querySingle(string $query, bool $entireRow = false): mixed {}
    /**
     * Configures a callback to be used as an authorizer to limit what a statement can do
     */
     public function setAuthorizer(?callable $callback): bool {}
    /**
     * Returns the SQLite3 library version as a string constant and as a number
     */
     public static function version(): array {}
}

/**
 * The SQLite3Exception class (PHP 8 >= 8.3.0)
 */
 class SQLite3Exception extends \Exception implements \Stringable, \Throwable {
}

/**
 * SQLite3Result 类
 */
 class SQLite3Result {
    /**
     * Constructs an SQLite3Result
     */
     private function __construct() {}
    /**
     * Returns the name of the nth column
     */
     public function columnName(int $column): string|false {}
    /**
     * Returns the type of the nth column
     */
     public function columnType(int $column): int|false {}
    public function fetchAll(int $mode = SQLITE3_BOTH): array|false {}
    /**
     * Fetches a result row as an associative or numerically indexed array or both
     */
     public function fetchArray(int $mode = SQLITE3_BOTH): array|false {}
    /**
     * Closes the result set
     */
     public function finalize(): true {}
    /**
     * Returns the number of columns in the result set
     */
     public function numColumns(): int {}
    /**
     * Resets the result set back to the first row
     */
     public function reset(): bool {}
}

/**
 * SQLite3Stmt 类
 */
 class SQLite3Stmt {
    public const EXPLAIN_MODE_EXPLAIN = 1;
    public const EXPLAIN_MODE_EXPLAIN_QUERY_PLAN = 2;
    public const EXPLAIN_MODE_PREPARED = 0;
    /**
     * Constructs an SQLite3Stmt object
     */
     private function __construct(\SQLite3 $sqlite3, string $query) {}
    /**
     * Binds a parameter to a statement variable
     */
     public function bindParam(string|int $param, mixed &$var, int $type = SQLITE3_TEXT): bool {}
    /**
     * Binds the value of a parameter to a statement variable
     */
     public function bindValue(string|int $param, mixed $value, int $type = SQLITE3_TEXT): bool {}
    /**
     * Returns whether the statement has been fetched but not yet completed (PHP 8 >= 8.5.0)
     */
     public function busy(): bool {}
    /**
     * Clears all current bound parameters
     */
     public function clear(): bool {}
    /**
     * Closes the prepared statement
     */
     public function close(): true {}
    /**
     * Executes a prepared statement and returns a result set object
     */
     public function execute(): \SQLite3Result|false {}
    /**
     * Returns the explain mode of the statement (PHP 8 >= 8.5.0)
     */
     public function explain(): int {}
    /**
     * Get the SQL of the statement
     */
     public function getSQL(bool $expand = false): string|false {}
    /**
     * Returns the number of parameters within the prepared statement
     */
     public function paramCount(): int {}
    /**
     * Returns whether a statement is definitely read only
     */
     public function readOnly(): bool {}
    /**
     * Resets the prepared statement
     */
     public function reset(): bool {}
    /**
     * Changes the explain mode of the statement (PHP 8 >= 8.5.0)
     */
     public function setExplain(int $mode): bool {}
}

/**
 * SeekableIterator 接口
 */
 interface SeekableIterator extends \Iterator, \Traversable {
    /**
     * Seeks to a position
     */
     public abstract function seek(int $offset): void;
}

/**
 * SensitiveParameter 注解 (PHP 8 >= 8.2.0)
 */
 final class SensitiveParameter {
    /**
     * 构造新的 SensitiveParameter 属性实例 (PHP 8 >= 8.2.0)
     */
     public function __construct() {}
}

/**
 * SensitiveParameterValue 类 (PHP 8 >= 8.2.0)
 */
 final class SensitiveParameterValue {
    private readonly mixed $value;
    /**
     * 构造新的 SensitiveParameterValue 对象 (PHP 8 >= 8.2.0)
     */
     public function __construct(mixed $value) {}
    public function __debugInfo(): array {}
    /**
     * 返回敏感值 (PHP 8 >= 8.2.0)
     */
     public function getValue(): mixed {}
}

/**
 * Serializable 接口
 */
 interface Serializable {
    /**
     * 对象的字符串表示
     */
     public abstract function serialize();
    /**
     * 构造对象
     */
     public abstract function unserialize(string $data);
}

/**
 * The SessionHandler class
 */
 class SessionHandler implements \SessionHandlerInterface, \SessionIdInterface {
    /**
     * Close the session
     */
     public function close(): bool {}
    /**
     * Return a new session ID
     */
     public function create_sid(): string {}
    /**
     * Destroy a session
     */
     public function destroy(string $id): bool {}
    /**
     * Cleanup old sessions
     */
     public function gc(int $max_lifetime): int|false {}
    /**
     * Initialize session
     */
     public function open(string $path, string $name): bool {}
    /**
     * Read session data
     */
     public function read(string $id): string|false {}
    /**
     * Write session data
     */
     public function write(string $id, string $data): bool {}
}

/**
 * The SessionHandlerInterface class
 */
 interface SessionHandlerInterface {
    /**
     * Close the session
     */
     public abstract function close(): bool;
    /**
     * Destroy a session
     */
     public abstract function destroy(string $id): bool;
    /**
     * Cleanup old sessions
     */
     public abstract function gc(int $max_lifetime): int|false;
    /**
     * Initialize session
     */
     public abstract function open(string $path, string $name): bool;
    /**
     * Read session data
     */
     public abstract function read(string $id): string|false;
    /**
     * Write session data
     */
     public abstract function write(string $id, string $data): bool;
}

/**
 * The SessionIdInterface interface
 */
 interface SessionIdInterface {
    /**
     * Create session ID
     */
     public abstract function create_sid(): string;
}

/**
 * The SessionUpdateTimestampHandlerInterface interface
 */
 interface SessionUpdateTimestampHandlerInterface {
    /**
     * Update timestamp
     */
     public abstract function updateTimestamp(string $id, string $data): bool;
    /**
     * Validate ID
     */
     public abstract function validateId(string $id): bool;
}

/**
 * The Shmop class
 */
 final class Shmop {
}

/**
 * The SimpleXMLElement class
 */
 class SimpleXMLElement implements \Countable, \Iterator, \RecursiveIterator, \Stringable, \Traversable {
    /**
     * Creates a new SimpleXMLElement object
     */
     public function __construct(string $data, int $options = 0, bool $dataIsURL = false, string $namespaceOrPrefix = "", bool $isPrefix = false) {}
    public function __debugInfo(): ?array {}
    public function __toString(): string {}
    /**
     * Adds an attribute to the SimpleXML element
     */
     public function addAttribute(string $qualifiedName, string $value, ?string $namespace = NULL): void {}
    /**
     * Adds a child element to the XML node
     */
     public function addChild(string $qualifiedName, ?string $value = NULL, ?string $namespace = NULL): ?\SimpleXMLElement {}
    /**
     * Return a well-formed XML string based on SimpleXML element
     */
     public function asXML(?string $filename = NULL): string|bool {}
    /**
     * Identifies an element's attributes
     */
     public function attributes(?string $namespaceOrPrefix = NULL, bool $isPrefix = false): ?\SimpleXMLElement {}
    /**
     * Finds children of given node
     */
     public function children(?string $namespaceOrPrefix = NULL, bool $isPrefix = false): ?\SimpleXMLElement {}
    /**
     * Counts the children of an element
     */
     public function count(): int {}
    /**
     * Returns the current element
     */
     public function current(): \SimpleXMLElement {}
    /**
     * Returns the sub-elements of the current element
     */
     public function getChildren(): ?\SimpleXMLElement {}
    /**
     * Returns namespaces declared in document
     */
     public function getDocNamespaces(bool $recursive = false, bool $fromRoot = true): array|false {}
    /**
     * Gets the name of the XML element
     */
     public function getName(): string {}
    /**
     * Returns namespaces used in document
     */
     public function getNamespaces(bool $recursive = false): array {}
    /**
     * Checks whether the current element has sub elements
     */
     public function hasChildren(): bool {}
    /**
     * Return current key
     */
     public function key(): string {}
    /**
     * Move to next element
     */
     public function next(): void {}
    /**
     * Creates a prefix/ns context for the next XPath query
     */
     public function registerXPathNamespace(string $prefix, string $namespace): bool {}
    /**
     * Rewind to the first element
     */
     public function rewind(): void {}
    /**
     * 别名 SimpleXMLElement::asXML
     */
     public function saveXML(?string $filename = NULL): string|bool {}
    /**
     * Check whether the current element is valid
     */
     public function valid(): bool {}
    /**
     * Runs XPath query on XML data
     */
     public function xpath(string $expression): array|false|null {}
}

/**
 * The SimpleXMLIterator class
 */
 class SimpleXMLIterator extends \SimpleXMLElement implements \Countable, \Iterator, \RecursiveIterator, \Stringable, \Traversable {
}

/**
 * The SoapClient class
 */
 class SoapClient {
    private ?array $__default_headers;
    private ?string $__last_request;
    private ?string $__last_request_headers;
    private ?string $__last_response;
    private ?string $__last_response_headers;
    private ?\SoapFault $__soap_fault;
    private ?array $_classmap;
    private int $_connection_timeout;
    private array $_cookies;
    private ?string $_digest;
    private ?string $_encoding;
    private bool $_exceptions;
    private ?int $_features;
    private bool $_keep_alive;
    private ?string $_login;
    private ?string $_password;
    private ?string $_proxy_host;
    private ?string $_proxy_login;
    private ?string $_proxy_password;
    private ?int $_proxy_port;
    private int $_soap_version;
    private ?int $_ssl_method;
    private $_stream_context;
    private bool $_use_digest;
    private ?int $_use_proxy;
    private ?string $_user_agent;
    private ?int $compression;
    private $httpsocket;
    private ?\Soap\Url $httpurl;
    private ?string $location;
    private ?\Soap\Sdl $sdl;
    private ?int $style;
    private bool $trace;
    private ?array $typemap;
    private ?string $uri;
    private ?int $use;
    public function __call(string $name, array $args): mixed {}
    /**
     * SoapClient constructor
     */
     public function __construct(?string $wsdl, array $options = []) {}
    public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false, ?string $uriParserClass = NULL): ?string {}
    public function __getCookies(): array {}
    public function __getFunctions(): ?array {}
    public function __getLastRequest(): ?string {}
    public function __getLastRequestHeaders(): ?string {}
    public function __getLastResponse(): ?string {}
    public function __getLastResponseHeaders(): ?string {}
    public function __getTypes(): ?array {}
    public function __setCookie(string $name, ?string $value = NULL): void {}
    public function __setLocation(?string $location = NULL): ?string {}
    public function __setSoapHeaders($headers = NULL): bool {}
    public function __soapCall(string $name, array $args, ?array $options = NULL, $inputHeaders = NULL, &$outputHeaders = NULL): mixed {}
}

/**
 * The SoapFault class
 */
 class SoapFault extends \Exception implements \Stringable, \Throwable {
    public ?string $_name;
    public mixed $detail;
    public ?string $faultactor;
    public ?string $faultcode;
    public ?string $faultcodens;
    public string $faultstring;
    public mixed $headerfault;
    public string $lang;
    /**
     * SoapFault constructor
     */
     public function __construct(array|string|null $code, string $string, ?string $actor = NULL, mixed $details = NULL, ?string $name = NULL, mixed $headerFault = NULL, string $lang = "") {}
    public function __toString(): string {}
}

/**
 * The SoapHeader class
 */
 class SoapHeader {
    public string|int|null $actor;
    public mixed $data;
    public bool $mustUnderstand;
    public string $name;
    public string $namespace;
    /**
     * SoapHeader constructor
     */
     public function __construct(string $namespace, string $name, mixed $data = null, bool $mustUnderstand = false, string|int|null $actor = NULL) {}
}

/**
 * The SoapParam class
 */
 class SoapParam {
    public mixed $param_data;
    public string $param_name;
    /**
     * SoapParam constructor
     */
     public function __construct(mixed $data, string $name) {}
}

/**
 * The SoapServer class
 */
 class SoapServer {
    private ?\SoapFault $__soap_fault;
    /**
     * SoapServer constructor
     */
     public function __construct(?string $wsdl, array $options = []) {}
    public function __getLastResponse(): ?string {}
    /**
     * 添加一个或多个函数来处理 SOAP 请求
     */
     public function addFunction($functions): void {}
    /**
     * Add a SOAP header to the response
     */
     public function addSoapHeader(\SoapHeader $header): void {}
    /**
     * Issue SoapServer fault indicating an error
     */
     public function fault(string $code, string $string, string $actor = "", mixed $details = NULL, string $name = "", string $lang = ""): void {}
    /**
     * Returns list of defined functions
     */
     public function getFunctions(): array {}
    /**
     * Handles a SOAP request
     */
     public function handle(?string $request = NULL): void {}
    /**
     * Sets the class which handles SOAP requests
     */
     public function setClass(string $class, mixed ...$args): void {}
    /**
     * Sets the object which will be used to handle SOAP requests
     */
     public function setObject(object $object): void {}
    /**
     * Sets SoapServer persistence mode
     */
     public function setPersistence(int $mode): void {}
}

/**
 * The SoapVar class
 */
 class SoapVar {
    public ?string $enc_name;
    public ?string $enc_namens;
    public ?string $enc_ns;
    public ?string $enc_stype;
    public int $enc_type;
    public mixed $enc_value;
    /**
     * SoapVar constructor
     */
     public function __construct(mixed $data, ?int $encoding, ?string $typeName = NULL, ?string $typeNamespace = NULL, ?string $nodeName = NULL, ?string $nodeNamespace = NULL) {}
}

/**
 * Socket 类
 */
 final class Socket {
}

/**
 * The SodiumException class
 */
 class SodiumException extends \Exception implements \Stringable, \Throwable {
}

/**
 * SplDoublyLinkedList 类
 */
 class SplDoublyLinkedList implements \ArrayAccess, \Countable, \Iterator, \Serializable, \Traversable {
    public const IT_MODE_DELETE = 1;
    public const IT_MODE_FIFO = 0;
    public const IT_MODE_KEEP = 0;
    public const IT_MODE_LIFO = 2;
    public function __debugInfo(): array {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
    /**
     * Add/insert a new value at the specified index
     */
     public function add(int $index, mixed $value): void {}
    /**
     * Peeks at the node from the beginning of the doubly linked list
     */
     public function bottom(): mixed {}
    /**
     * Counts the number of elements in the doubly linked list
     */
     public function count(): int {}
    /**
     * Return current array entry
     */
     public function current(): mixed {}
    /**
     * Returns the mode of iteration
     */
     public function getIteratorMode(): int {}
    /**
     * Checks whether the doubly linked list is empty
     */
     public function isEmpty(): bool {}
    /**
     * Return current node index
     */
     public function key(): int {}
    /**
     * Move to next entry
     */
     public function next(): void {}
    /**
     * Returns whether the requested $index exists
     */
     public function offsetExists($index): bool {}
    /**
     * Returns the value at the specified $index
     */
     public function offsetGet($index): mixed {}
    /**
     * Sets the value at the specified $index to $value
     */
     public function offsetSet($index, mixed $value): void {}
    /**
     * Unsets the value at the specified $index
     */
     public function offsetUnset($index): void {}
    /**
     * Pops a node from the end of the doubly linked list
     */
     public function pop(): mixed {}
    /**
     * Move to previous entry
     */
     public function prev(): void {}
    /**
     * Pushes an element at the end of the doubly linked list
     */
     public function push(mixed $value): void {}
    /**
     * Rewind iterator back to the start
     */
     public function rewind(): void {}
    /**
     * Serializes the storage
     */
     public function serialize(): string {}
    /**
     * Sets the mode of iteration
     */
     public function setIteratorMode(int $mode): int {}
    /**
     * Shifts a node from the beginning of the doubly linked list
     */
     public function shift(): mixed {}
    /**
     * Peeks at the node from the end of the doubly linked list
     */
     public function top(): mixed {}
    /**
     * Unserializes the storage
     */
     public function unserialize(string $data): void {}
    /**
     * Prepends the doubly linked list with an element
     */
     public function unshift(mixed $value): void {}
    /**
     * Check whether the doubly linked list contains more nodes
     */
     public function valid(): bool {}
}

/**
 * The SplFileInfo class
 */
 class SplFileInfo implements \Stringable {
    /**
     * 构造新的 SplFileInfo 对象
     */
     public function __construct(string $filename) {}
    public function __debugInfo(): array {}
    public function __toString(): string {}
    public final function _bad_state_ex(): void {}
    /**
     * Gets last access time of the file
     */
     public function getATime(): int|false {}
    /**
     * Gets the base name of the file
     */
     public function getBasename(string $suffix = ""): string {}
    /**
     * 获取文件 inode 修改时间
     */
     public function getCTime(): int|false {}
    /**
     * Gets the file extension
     */
     public function getExtension(): string {}
    /**
     * Gets an SplFileInfo object for the file
     */
     public function getFileInfo(?string $class = NULL): \SplFileInfo {}
    /**
     * Gets the filename
     */
     public function getFilename(): string {}
    /**
     * Gets the file group
     */
     public function getGroup(): int|false {}
    /**
     * Gets the inode for the file
     */
     public function getInode(): int|false {}
    /**
     * Gets the target of a link
     */
     public function getLinkTarget(): string|false {}
    /**
     * Gets the last modified time
     */
     public function getMTime(): int|false {}
    /**
     * Gets the owner of the file
     */
     public function getOwner(): int|false {}
    /**
     * Gets the path without filename
     */
     public function getPath(): string {}
    /**
     * Gets an SplFileInfo object for the path
     */
     public function getPathInfo(?string $class = NULL): ?\SplFileInfo {}
    /**
     * Gets the path to the file
     */
     public function getPathname(): string {}
    /**
     * Gets file permissions
     */
     public function getPerms(): int|false {}
    /**
     * Gets absolute path to file
     */
     public function getRealPath(): string|false {}
    /**
     * Gets file size
     */
     public function getSize(): int|false {}
    /**
     * Gets file type
     */
     public function getType(): string|false {}
    /**
     * Tells if the file is a directory
     */
     public function isDir(): bool {}
    /**
     * Tells if the file is executable
     */
     public function isExecutable(): bool {}
    /**
     * Tells if the object references a regular file
     */
     public function isFile(): bool {}
    /**
     * Tells if the file is a link
     */
     public function isLink(): bool {}
    /**
     * Tells if file is readable
     */
     public function isReadable(): bool {}
    /**
     * Tells if the entry is writable
     */
     public function isWritable(): bool {}
    /**
     * Gets an SplFileObject object for the file
     */
     public function openFile(string $mode = "r", bool $useIncludePath = false, $context = NULL): \SplFileObject {}
    /**
     * Sets the class used with SplFileInfo::openFile
     */
     public function setFileClass(string $class = "SplFileObject"): void {}
    /**
     * Sets the class used with SplFileInfo::getFileInfo and SplFileInfo::getPathInfo
     */
     public function setInfoClass(string $class = "SplFileInfo"): void {}
}

/**
 * SplFileObject 类
 */
 class SplFileObject extends \SplFileInfo implements \Iterator, \RecursiveIterator, \SeekableIterator, \Stringable, \Traversable {
    public const DROP_NEW_LINE = 1;
    public const READ_AHEAD = 2;
    public const READ_CSV = 8;
    public const SKIP_EMPTY = 4;
    /**
     * Construct a new file object
     */
     public function __construct(string $filename, string $mode = "r", bool $useIncludePath = false, $context = NULL) {}
    public function __toString(): string {}
    /**
     * Retrieve current line of file
     */
     public function current(): array|string|false {}
    /**
     * Reached end of file
     */
     public function eof(): bool {}
    /**
     * Flushes the output to the file
     */
     public function fflush(): bool {}
    /**
     * Gets character from file
     */
     public function fgetc(): string|false {}
    /**
     * Gets line from file and parse as CSV fields
     */
     public function fgetcsv(string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array|false {}
    /**
     * Gets line from file
     */
     public function fgets(): string {}
    /**
     * Portable file locking
     */
     public function flock(int $operation, &$wouldBlock = NULL): bool {}
    /**
     * Output all remaining data on a file pointer
     */
     public function fpassthru(): int {}
    /**
     * Write a field array as a CSV line
     */
     public function fputcsv(array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false {}
    /**
     * Read from file
     */
     public function fread(int $length): string|false {}
    /**
     * Parses input from file according to a format
     */
     public function fscanf(string $format, mixed &...$vars): array|int|null {}
    /**
     * Seek to a position
     */
     public function fseek(int $offset, int $whence = SEEK_SET): int {}
    /**
     * Gets information about the file
     */
     public function fstat(): array {}
    /**
     * Return current file position
     */
     public function ftell(): int|false {}
    /**
     * Truncates the file to a given length
     */
     public function ftruncate(int $size): bool {}
    /**
     * Write to file
     */
     public function fwrite(string $data, ?int $length = NULL): int|false {}
    /**
     * No purpose
     */
     public function getChildren(): null {}
    /**
     * Get the delimiter, enclosure and escape character for CSV
     */
     public function getCsvControl(): array {}
    /**
     * 别名 SplFileObject::fgets
     */
     public function getCurrentLine(): string {}
    /**
     * Gets flags for the SplFileObject
     */
     public function getFlags(): int {}
    /**
     * Get maximum line length
     */
     public function getMaxLineLen(): int {}
    /**
     * SplFileObject does not have children
     */
     public function hasChildren(): false {}
    /**
     * Get line number
     */
     public function key(): int {}
    /**
     * Read next line
     */
     public function next(): void {}
    /**
     * Rewind the file to the first line
     */
     public function rewind(): void {}
    /**
     * Seek to specified line
     */
     public function seek(int $line): void {}
    /**
     * Set the delimiter, enclosure and escape character for CSV
     */
     public function setCsvControl(string $separator = ",", string $enclosure = "\"", string $escape = "\\"): void {}
    /**
     * Sets flags for the SplFileObject
     */
     public function setFlags(int $flags): void {}
    /**
     * Set maximum line length
     */
     public function setMaxLineLen(int $maxLength): void {}
    /**
     * Not at EOF
     */
     public function valid(): bool {}
}

/**
 * The SplFixedArray class
 */
 class SplFixedArray implements \ArrayAccess, \Countable, \IteratorAggregate, \JsonSerializable, \Traversable {
    /**
     * Constructs a new fixed array
     */
     public function __construct(int $size = 0) {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
    public function __wakeup(): void {}
    /**
     * Returns the size of the array
     */
     public function count(): int {}
    /**
     * Import a PHP array in a SplFixedArray instance
     */
     public static function fromArray(array $array, bool $preserveKeys = true): \SplFixedArray {}
    /**
     * Retrieve the iterator to go through the array
     */
     public function getIterator(): \Iterator {}
    /**
     * Gets the size of the array
     */
     public function getSize(): int {}
    /**
     * Returns a representation that can be converted to JSON (PHP 8 >= 8.1.0)
     */
     public function jsonSerialize(): array {}
    /**
     * Returns whether the requested index exists
     */
     public function offsetExists($index): bool {}
    /**
     * Returns the value at the specified index
     */
     public function offsetGet($index): mixed {}
    /**
     * Sets a new value at a specified index
     */
     public function offsetSet($index, mixed $value): void {}
    /**
     * Unsets the value at the specified $index
     */
     public function offsetUnset($index): void {}
    /**
     * Change the size of an array
     */
     public function setSize(int $size): true {}
    /**
     * Returns a PHP array from the fixed array
     */
     public function toArray(): array {}
}

/**
 * The SplHeap class
 */
 abstract class SplHeap implements \Countable, \Iterator, \Traversable {
    public function __debugInfo(): array {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
    /**
     * Compare elements in order to place them correctly in the heap while sifting up
     */
     protected abstract function compare(mixed $value1, mixed $value2): int;
    /**
     * Counts the number of elements in the heap
     */
     public function count(): int {}
    /**
     * Return current node pointed by the iterator
     */
     public function current(): mixed {}
    /**
     * Extracts a node from top of the heap and sift up
     */
     public function extract(): mixed {}
    /**
     * Inserts an element in the heap by sifting it up
     */
     public function insert(mixed $value): true {}
    /**
     * Tells if the heap is in a corrupted state
     */
     public function isCorrupted(): bool {}
    /**
     * Checks whether the heap is empty
     */
     public function isEmpty(): bool {}
    /**
     * Return current node index
     */
     public function key(): int {}
    /**
     * Move to the next node
     */
     public function next(): void {}
    /**
     * Recover from the corrupted state and allow further actions on the heap
     */
     public function recoverFromCorruption(): true {}
    /**
     * Rewind iterator back to the start (no-op)
     */
     public function rewind(): void {}
    /**
     * Peeks at the node from the top of the heap
     */
     public function top(): mixed {}
    /**
     * Check whether the heap contains more nodes
     */
     public function valid(): bool {}
}

/**
 * The SplMaxHeap class
 */
 class SplMaxHeap extends \SplHeap implements \Countable, \Iterator, \Traversable {
    /**
     * Compare elements in order to place them correctly in the heap while sifting up
     */
     protected function compare(mixed $value1, mixed $value2): int {}
}

/**
 * The SplMinHeap class
 */
 class SplMinHeap extends \SplHeap implements \Countable, \Iterator, \Traversable {
    /**
     * Compare elements in order to place them correctly in the heap while sifting up
     */
     protected function compare(mixed $value1, mixed $value2): int {}
}

/**
 * The SplObjectStorage class
 */
 class SplObjectStorage implements \ArrayAccess, \Countable, \Iterator, \SeekableIterator, \Serializable, \Traversable {
    public function __debugInfo(): array {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
    /**
     * Adds all objects from another storage
     */
     public function addAll(\SplObjectStorage $storage): int {}
    /**
     * Adds an object in the storage
     */
     public function attach(object $object, mixed $info = NULL): void {}
    /**
     * Checks if the storage contains a specific object
     */
     public function contains(object $object): bool {}
    /**
     * Returns the number of objects in the storage
     */
     public function count(int $mode = COUNT_NORMAL): int {}
    /**
     * Returns the current storage entry
     */
     public function current(): object {}
    /**
     * Removes an object from the storage
     */
     public function detach(object $object): void {}
    /**
     * Calculate a unique identifier for the contained objects
     */
     public function getHash(object $object): string {}
    /**
     * Returns the data associated with the current iterator entry
     */
     public function getInfo(): mixed {}
    /**
     * Returns the index at which the iterator currently is
     */
     public function key(): int {}
    /**
     * Move to the next entry
     */
     public function next(): void {}
    /**
     * Checks whether an object exists in the storage
     */
     public function offsetExists($object): bool {}
    /**
     * Returns the data associated with an object
     */
     public function offsetGet($object): mixed {}
    /**
     * Associates data to an object in the storage
     */
     public function offsetSet($object, mixed $info = NULL): void {}
    /**
     * Removes an object from the storage
     */
     public function offsetUnset($object): void {}
    /**
     * Removes objects contained in another storage from the current storage
     */
     public function removeAll(\SplObjectStorage $storage): int {}
    /**
     * Removes all objects except for those contained in another storage from the current storage
     */
     public function removeAllExcept(\SplObjectStorage $storage): int {}
    /**
     * Rewind the iterator to the first storage element
     */
     public function rewind(): void {}
    /**
     * Seeks iterator to a position (PHP 8 >= 8.4.0)
     */
     public function seek(int $offset): void {}
    /**
     * Serializes the storage
     */
     public function serialize(): string {}
    /**
     * Sets the data associated with the current iterator entry
     */
     public function setInfo(mixed $info): void {}
    /**
     * Unserializes a storage from its string representation
     */
     public function unserialize(string $data): void {}
    /**
     * Returns if the current iterator entry is valid
     */
     public function valid(): bool {}
}

/**
 * The SplObserver interface
 */
 interface SplObserver {
    /**
     * Receive update from subject
     */
     public abstract function update(\SplSubject $subject): void;
}

/**
 * The SplPriorityQueue class
 */
 class SplPriorityQueue implements \Countable, \Iterator, \Traversable {
    public const EXTR_BOTH = 3;
    public const EXTR_DATA = 1;
    public const EXTR_PRIORITY = 2;
    public function __debugInfo(): array {}
    public function __serialize(): array {}
    public function __unserialize(array $data): void {}
    /**
     * Compare priorities in order to place elements correctly in the heap while sifting up
     */
     public function compare(mixed $priority1, mixed $priority2): int {}
    /**
     * Counts the number of elements in the queue
     */
     public function count(): int {}
    /**
     * Return current node pointed by the iterator
     */
     public function current(): mixed {}
    /**
     * Extracts a node from top of the heap and sift up
     */
     public function extract(): mixed {}
    /**
     * Get the flags of extraction
     */
     public function getExtractFlags(): int {}
    /**
     * Inserts an element in the queue by sifting it up
     */
     public function insert(mixed $value, mixed $priority): true {}
    /**
     * Tells if the priority queue is in a corrupted state
     */
     public function isCorrupted(): bool {}
    /**
     * Checks whether the queue is empty
     */
     public function isEmpty(): bool {}
    /**
     * Return current node index
     */
     public function key(): int {}
    /**
     * Move to the next node
     */
     public function next(): void {}
    /**
     * Recover from the corrupted state and allow further actions on the queue
     */
     public function recoverFromCorruption(): true {}
    /**
     * Rewind iterator back to the start (no-op)
     */
     public function rewind(): void {}
    /**
     * Sets the mode of extraction
     */
     public function setExtractFlags(int $flags): int {}
    /**
     * Peeks at the node from the top of the queue
     */
     public function top(): mixed {}
    /**
     * Check whether the queue contains more nodes
     */
     public function valid(): bool {}
}

/**
 * SplQueue 类
 */
 class SplQueue extends \SplDoublyLinkedList implements \ArrayAccess, \Countable, \Iterator, \Serializable, \Traversable {
    /**
     * Dequeues a node from the queue
     */
     public function dequeue(): mixed {}
    /**
     * Adds an element to the queue
     */
     public function enqueue(mixed $value): void {}
}

/**
 * SplStack 类
 */
 class SplStack extends \SplDoublyLinkedList implements \ArrayAccess, \Countable, \Iterator, \Serializable, \Traversable {
}

/**
 * The SplSubject interface
 */
 interface SplSubject {
    /**
     * Attach an SplObserver
     */
     public abstract function attach(\SplObserver $observer): void;
    /**
     * Detach an observer
     */
     public abstract function detach(\SplObserver $observer): void;
    /**
     * Notify an observer
     */
     public abstract function notify(): void;
}

/**
 * The SplTempFileObject class
 */
 class SplTempFileObject extends \SplFileObject implements \Iterator, \RecursiveIterator, \SeekableIterator, \Stringable, \Traversable {
    /**
     * Construct a new temporary file object
     */
     public function __construct(int $maxMemory = 2097152) {}
}

/**
 * The Spoofchecker class
 */
 class Spoofchecker {
    public const ADD_CASE_MAPPINGS = 4;
    public const ANY_CASE = 8;
    public const ASCII = 268435456;
    public const CASE_INSENSITIVE = 2;
    public const CHAR_LIMIT = 64;
    public const HIDDEN_OVERLAY = 256;
    public const HIGHLY_RESTRICTIVE = 805306368;
    public const IGNORE_SPACE = 1;
    public const INVISIBLE = 32;
    public const MINIMALLY_RESTRICTIVE = 1342177280;
    public const MIXED_NUMBERS = 128;
    public const MIXED_SCRIPT_CONFUSABLE = 2;
    public const MODERATELY_RESTRICTIVE = 1073741824;
    public const SIMPLE_CASE_INSENSITIVE = 6;
    public const SINGLE_SCRIPT = 16;
    public const SINGLE_SCRIPT_CONFUSABLE = 1;
    public const SINGLE_SCRIPT_RESTRICTIVE = 536870912;
    public const UNRESTRICTIVE = 1610612736;
    public const WHOLE_SCRIPT_CONFUSABLE = 4;
    /**
     * Constructor
     */
     public function __construct() {}
    /**
     * Checks if given strings can be confused
     */
     public function areConfusable(string $string1, string $string2, &$errorCode = NULL): bool {}
    /**
     * Checks if a given text contains any suspicious characters
     */
     public function isSuspicious(string $string, &$errorCode = NULL): bool {}
    /**
     * Set the set of characters allowed when running checks (PHP 8 >= 8.4.0)
     */
     public function setAllowedChars(string $pattern, int $patternOptions = 0): void {}
    /**
     * Locales to use when running checks
     */
     public function setAllowedLocales(string $locales): void {}
    /**
     * Set the checks to run
     */
     public function setChecks(int $checks): void {}
    /**
     * Set the restriction level
     */
     public function setRestrictionLevel(int $level): void {}
}

final class StreamBucket {
    public $bucket;
    public string $data;
    public int $dataLength;
    public int $datalen;
}

/**
 * Stringable 接口
 */
 interface Stringable {
    public abstract function __toString(): string;
}

/**
 * Throwable
 */
 interface Throwable extends \Stringable {
    /**
     * 获取异常代码
     */
     public abstract function getCode();
    /**
     * 获取创建对象的文件
     */
     public abstract function getFile(): string;
    /**
     * 获取初始化对象时候的行号
     */
     public abstract function getLine(): int;
    /**
     * 获取信息
     */
     public abstract function getMessage(): string;
    /**
     * 返回先前的 Throwable
     */
     public abstract function getPrevious(): ?\Throwable;
    /**
     * 获取堆栈踪迹（Stack Trace）
     */
     public abstract function getTrace(): array;
    /**
     * 以 string 形式获取堆栈踪迹
     */
     public abstract function getTraceAsString(): string;
}

/**
 * The Transliterator class
 */
 class Transliterator {
    public const FORWARD = 0;
    public const REVERSE = 1;
    public readonly string $id;
    /**
     * Private constructor to deny instantiation
     */
     private final function __construct() {}
    /**
     * Create a transliterator
     */
     public static function create(string $id, int $direction = Transliterator::FORWARD): ?\Transliterator {}
    /**
     * Create transliterator from rules
     */
     public static function createFromRules(string $rules, int $direction = Transliterator::FORWARD): ?\Transliterator {}
    /**
     * Create an inverse transliterator
     */
     public function createInverse(): ?\Transliterator {}
    /**
     * Get last error code
     */
     public function getErrorCode(): int {}
    /**
     * Get last error message
     */
     public function getErrorMessage(): string {}
    /**
     * Get transliterator IDs
     */
     public static function listIDs(): array|false {}
    /**
     * Transliterate a string
     */
     public function transliterate(string $string, int $start = 0, int $end = -1): string|false {}
}

/**
 * Traversable （遍历）接口
 */
 interface Traversable {
}

/**
 * TypeError
 */
 class TypeError extends \Error implements \Stringable, \Throwable {
}

/**
 * The UConverter class
 */
 class UConverter {
    public const BOCU1 = 28;
    public const CESU8 = 31;
    public const DBCS = 1;
    public const EBCDIC_STATEFUL = 9;
    public const HZ = 23;
    public const IMAP_MAILBOX = 32;
    public const ISCII = 25;
    public const ISO_2022 = 10;
    public const LATIN_1 = 3;
    public const LMBCS_1 = 11;
    public const LMBCS_11 = 18;
    public const LMBCS_16 = 19;
    public const LMBCS_17 = 20;
    public const LMBCS_18 = 21;
    public const LMBCS_19 = 22;
    public const LMBCS_2 = 12;
    public const LMBCS_3 = 13;
    public const LMBCS_4 = 14;
    public const LMBCS_5 = 15;
    public const LMBCS_6 = 16;
    public const LMBCS_8 = 17;
    public const LMBCS_LAST = 22;
    public const MBCS = 2;
    public const REASON_CLONE = 5;
    public const REASON_CLOSE = 4;
    public const REASON_ILLEGAL = 1;
    public const REASON_IRREGULAR = 2;
    public const REASON_RESET = 3;
    public const REASON_UNASSIGNED = 0;
    public const SBCS = 0;
    public const SCSU = 24;
    public const UNSUPPORTED_CONVERTER = -1;
    public const US_ASCII = 26;
    public const UTF16 = 29;
    public const UTF16_BigEndian = 5;
    public const UTF16_LittleEndian = 6;
    public const UTF32 = 30;
    public const UTF32_BigEndian = 7;
    public const UTF32_LittleEndian = 8;
    public const UTF7 = 27;
    public const UTF8 = 4;
    /**
     * Create UConverter object
     */
     public function __construct(?string $destination_encoding = NULL, ?string $source_encoding = NULL) {}
    /**
     * Convert string from one charset to another
     */
     public function convert(string $str, bool $reverse = false): string|false {}
    /**
     * Default &quot;from&quot; callback function
     */
     public function fromUCallback(int $reason, array $source, int $codePoint, &$error): array|string|int|null {}
    /**
     * Get the aliases of the given name
     */
     public static function getAliases(string $name): array|false|null {}
    /**
     * Get the available canonical converter names
     */
     public static function getAvailable(): array {}
    /**
     * Get the destination encoding
     */
     public function getDestinationEncoding(): string|false|null {}
    /**
     * Get the destination converter type
     */
     public function getDestinationType(): int|false|null {}
    /**
     * Get last error code on the object
     */
     public function getErrorCode(): int {}
    /**
     * Get last error message on the object
     */
     public function getErrorMessage(): ?string {}
    /**
     * Get the source encoding
     */
     public function getSourceEncoding(): string|false|null {}
    /**
     * Get the source converter type
     */
     public function getSourceType(): int|false|null {}
    /**
     * Get standards associated to converter names
     */
     public static function getStandards(): ?array {}
    /**
     * Get substitution chars
     */
     public function getSubstChars(): string|false|null {}
    /**
     * Get string representation of the callback reason
     */
     public static function reasonText(int $reason): string {}
    /**
     * Set the destination encoding
     */
     public function setDestinationEncoding(string $encoding): bool {}
    /**
     * Set the source encoding
     */
     public function setSourceEncoding(string $encoding): bool {}
    /**
     * Set the substitution chars
     */
     public function setSubstChars(string $chars): bool {}
    /**
     * Default &quot;to&quot; callback function
     */
     public function toUCallback(int $reason, string $source, string $codeUnits, &$error): array|string|int|null {}
    /**
     * Convert a string from one character encoding to another
     */
     public static function transcode(string $str, string $toEncoding, string $fromEncoding, ?array $options = NULL): string|false {}
}

/**
 * The UnderflowException class
 */
 class UnderflowException extends \RuntimeException implements \Stringable, \Throwable {
}

/**
 * The UnexpectedValueException class
 */
 class UnexpectedValueException extends \RuntimeException implements \Stringable, \Throwable {
}

/**
 * UnhandledMatchError
 */
 class UnhandledMatchError extends \Error implements \Stringable, \Throwable {
}

/**
 * UnitEnum 接口 (PHP 8 >= 8.1.0)
 */
 interface UnitEnum {
    /**
     * 生成枚举的条目清单 (PHP 8 >= 8.1.0)
     */
     public abstract static function cases(): array;
}

/**
 * ValueError
 */
 class ValueError extends \Error implements \Stringable, \Throwable {
}

/**
 * WeakMap 类
 */
 final class WeakMap implements \ArrayAccess, \Countable, \IteratorAggregate, \Traversable {
    /**
     * 统计 map 中存活实体的数量
     */
     public function count(): int {}
    /**
     * 接收一个外部迭代器
     */
     public function getIterator(): \Iterator {}
    /**
     * 检测 map 中是否存在某个对象
     */
     public function offsetExists($object): bool {}
    /**
     * 返回某个对象指向的值
     */
     public function offsetGet($object): mixed {}
    /**
     * 更新 map 新的键值对
     */
     public function offsetSet($object, mixed $value): void {}
    /**
     * 从 map 中移除一条
     */
     public function offsetUnset($object): void {}
}

/**
 * WeakReference 类
 */
 final class WeakReference {
    /**
     * 不允许实例化的构造函数
     */
     public function __construct() {}
    /**
     * 创建新的弱引用
     */
     public static function create(object $object): \WeakReference {}
    /**
     * 获取弱引用对象
     */
     public function get(): ?object {}
}

/**
 * XMLParser 类
 */
 final class XMLParser {
}

/**
 * The XMLReader class
 */
 class XMLReader {
    public const ATTRIBUTE = 2;
    public const CDATA = 4;
    public const COMMENT = 8;
    public const DEFAULTATTRS = 2;
    public const DOC = 9;
    public const DOC_FRAGMENT = 11;
    public const DOC_TYPE = 10;
    public const ELEMENT = 1;
    public const END_ELEMENT = 15;
    public const END_ENTITY = 16;
    public const ENTITY = 6;
    public const ENTITY_REF = 5;
    public const LOADDTD = 1;
    public const NONE = 0;
    public const NOTATION = 12;
    public const PI = 7;
    public const SIGNIFICANT_WHITESPACE = 14;
    public const SUBST_ENTITIES = 4;
    public const TEXT = 3;
    public const VALIDATE = 3;
    public const WHITESPACE = 13;
    public const XML_DECLARATION = 17;
    public int $attributeCount;
    public string $baseURI;
    public int $depth;
    public bool $hasAttributes;
    public bool $hasValue;
    public bool $isDefault;
    public bool $isEmptyElement;
    public string $localName;
    public string $name;
    public string $namespaceURI;
    public int $nodeType;
    public string $prefix;
    public string $value;
    public string $xmlLang;
    /**
     * Set the data containing the XML to parse
     */
     public static function XML(string $source, ?string $encoding = NULL, int $flags = 0) {}
    /**
     * Close the XMLReader input
     */
     public function close(): true {}
    /**
     * Returns a copy of the current node as a DOM object
     */
     public function expand(?\DOMNode $baseNode = NULL): \DOMNode|false {}
    /**
     * Creates an XMLReader from a stream to read from (PHP 8 >= 8.4.0)
     */
     public static function fromStream($stream, ?string $encoding = NULL, int $flags = 0, ?string $documentUri = NULL): static {}
    /**
     * Creates an XMLReader from an XML string (PHP 8 >= 8.4.0)
     */
     public static function fromString(string $source, ?string $encoding = NULL, int $flags = 0): static {}
    /**
     * Creates an XMLReader from a URI to read from (PHP 8 >= 8.4.0)
     */
     public static function fromUri(string $uri, ?string $encoding = NULL, int $flags = 0): static {}
    /**
     * Get the value of a named attribute
     */
     public function getAttribute(string $name): ?string {}
    /**
     * Get the value of an attribute by index
     */
     public function getAttributeNo(int $index): ?string {}
    /**
     * Get the value of an attribute by localname and URI
     */
     public function getAttributeNs(string $name, string $namespace): ?string {}
    /**
     * Indicates if specified property has been set
     */
     public function getParserProperty(int $property): bool {}
    /**
     * Indicates if the parsed document is valid
     */
     public function isValid(): bool {}
    /**
     * Lookup namespace for a prefix
     */
     public function lookupNamespace(string $prefix): ?string {}
    /**
     * Move cursor to a named attribute
     */
     public function moveToAttribute(string $name): bool {}
    /**
     * Move cursor to an attribute by index
     */
     public function moveToAttributeNo(int $index): bool {}
    /**
     * Move cursor to a named attribute
     */
     public function moveToAttributeNs(string $name, string $namespace): bool {}
    /**
     * Position cursor on the parent Element of current Attribute
     */
     public function moveToElement(): bool {}
    /**
     * Position cursor on the first Attribute
     */
     public function moveToFirstAttribute(): bool {}
    /**
     * Position cursor on the next Attribute
     */
     public function moveToNextAttribute(): bool {}
    /**
     * Move cursor to next node skipping all subtrees
     */
     public function next(?string $name = NULL): bool {}
    /**
     * Set the URI containing the XML to parse
     */
     public static function open(string $uri, ?string $encoding = NULL, int $flags = 0) {}
    /**
     * Move to next node in document
     */
     public function read(): bool {}
    /**
     * Retrieve XML from current node
     */
     public function readInnerXml(): string {}
    /**
     * Retrieve XML from current node, including itself
     */
     public function readOuterXml(): string {}
    /**
     * Reads the contents of the current node as a string
     */
     public function readString(): string {}
    /**
     * Set parser options
     */
     public function setParserProperty(int $property, bool $value): bool {}
    /**
     * Set the filename or URI for a RelaxNG Schema
     */
     public function setRelaxNGSchema(?string $filename): bool {}
    /**
     * Set the data containing a RelaxNG Schema
     */
     public function setRelaxNGSchemaSource(?string $source): bool {}
    /**
     * Validate document against XSD
     */
     public function setSchema(?string $filename): bool {}
}

/**
 * The XMLWriter class
 */
 class XMLWriter {
    /**
     * End attribute
     */
     public function endAttribute(): bool {}
    /**
     * End current CDATA
     */
     public function endCdata(): bool {}
    /**
     * Create end comment
     */
     public function endComment(): bool {}
    /**
     * End current document
     */
     public function endDocument(): bool {}
    /**
     * End current DTD
     */
     public function endDtd(): bool {}
    /**
     * End current DTD AttList
     */
     public function endDtdAttlist(): bool {}
    /**
     * End current DTD element
     */
     public function endDtdElement(): bool {}
    /**
     * End current DTD Entity
     */
     public function endDtdEntity(): bool {}
    /**
     * End current element
     */
     public function endElement(): bool {}
    /**
     * End current PI
     */
     public function endPi(): bool {}
    /**
     * Flush current buffer
     */
     public function flush(bool $empty = true): string|int {}
    /**
     * End current element
     */
     public function fullEndElement(): bool {}
    /**
     * Create new xmlwriter using memory for string output
     */
     public function openMemory(): bool {}
    /**
     * Create new xmlwriter using source uri for output
     */
     public function openUri(string $uri): bool {}
    /**
     * Returns current buffer
     */
     public function outputMemory(bool $flush = true): string {}
    /**
     * Toggle indentation on/off
     */
     public function setIndent(bool $enable): bool {}
    /**
     * Set string used for indenting
     */
     public function setIndentString(string $indentation): bool {}
    /**
     * Create start attribute
     */
     public function startAttribute(string $name): bool {}
    /**
     * Create start namespaced attribute
     */
     public function startAttributeNs(?string $prefix, string $name, ?string $namespace): bool {}
    /**
     * Create start CDATA tag
     */
     public function startCdata(): bool {}
    /**
     * Create start comment
     */
     public function startComment(): bool {}
    /**
     * Create document tag
     */
     public function startDocument(?string $version = "1.0", ?string $encoding = NULL, ?string $standalone = NULL): bool {}
    /**
     * Create start DTD tag
     */
     public function startDtd(string $qualifiedName, ?string $publicId = NULL, ?string $systemId = NULL): bool {}
    /**
     * Create start DTD AttList
     */
     public function startDtdAttlist(string $name): bool {}
    /**
     * Create start DTD element
     */
     public function startDtdElement(string $qualifiedName): bool {}
    /**
     * Create start DTD Entity
     */
     public function startDtdEntity(string $name, bool $isParam): bool {}
    /**
     * Create start element tag
     */
     public function startElement(string $name): bool {}
    /**
     * Create start namespaced element tag
     */
     public function startElementNs(?string $prefix, string $name, ?string $namespace): bool {}
    /**
     * Create start PI tag
     */
     public function startPi(string $target): bool {}
    /**
     * Write text
     */
     public function text(string $content): bool {}
    /**
     * Create new XMLWriter using memory for string output (PHP 8 >= 8.4.0)
     */
     public static function toMemory(): static {}
    /**
     * Create new XMLWriter using a stream for output (PHP 8 >= 8.4.0)
     */
     public static function toStream($stream): static {}
    /**
     * Create new XMLWriter using a URI for output (PHP 8 >= 8.4.0)
     */
     public static function toUri(string $uri): static {}
    /**
     * Write full attribute
     */
     public function writeAttribute(string $name, string $value): bool {}
    /**
     * Write full namespaced attribute
     */
     public function writeAttributeNs(?string $prefix, string $name, ?string $namespace, string $value): bool {}
    /**
     * Write full CDATA tag
     */
     public function writeCdata(string $content): bool {}
    /**
     * Write full comment tag
     */
     public function writeComment(string $content): bool {}
    /**
     * Write full DTD tag
     */
     public function writeDtd(string $name, ?string $publicId = NULL, ?string $systemId = NULL, ?string $content = NULL): bool {}
    /**
     * Write full DTD AttList tag
     */
     public function writeDtdAttlist(string $name, string $content): bool {}
    /**
     * Write full DTD element tag
     */
     public function writeDtdElement(string $name, string $content): bool {}
    /**
     * Write full DTD Entity tag
     */
     public function writeDtdEntity(string $name, string $content, bool $isParam = false, ?string $publicId = NULL, ?string $systemId = NULL, ?string $notationData = NULL): bool {}
    /**
     * Write full element tag
     */
     public function writeElement(string $name, ?string $content = NULL): bool {}
    /**
     * Write full namespaced element tag
     */
     public function writeElementNs(?string $prefix, string $name, ?string $namespace, ?string $content = NULL): bool {}
    /**
     * Writes a PI
     */
     public function writePi(string $target, string $content): bool {}
    /**
     * Write a raw XML text
     */
     public function writeRaw(string $content): bool {}
}

/**
 * The XSLTProcessor class
 */
 class XSLTProcessor {
    public bool $cloneDocument;
    public bool $doXInclude;
    public int $maxTemplateDepth;
    public int $maxTemplateVars;
    /**
     * Get value of a parameter
     */
     public function getParameter(string $namespace, string $name): string|false {}
    /**
     * Get security preferences
     */
     public function getSecurityPrefs(): int {}
    /**
     * Determine if PHP has EXSLT support
     */
     public function hasExsltSupport(): bool {}
    /**
     * Import stylesheet
     */
     public function importStylesheet(object $stylesheet): bool {}
    /**
     * Register a PHP function as namespaced XSLT function
     */
     public function registerPHPFunctionNS(string $namespaceURI, string $name, callable $callable): void {}
    /**
     * Enables the ability to use PHP functions as XSLT functions
     */
     public function registerPHPFunctions(array|string|null $functions = NULL): void {}
    /**
     * Remove parameter
     */
     public function removeParameter(string $namespace, string $name): bool {}
    /**
     * Set value for a parameter
     */
     public function setParameter(string $namespace, array|string $name, ?string $value = NULL): bool {}
    /**
     * Sets profiling output file
     */
     public function setProfiling(?string $filename): true {}
    /**
     * Set security preferences
     */
     public function setSecurityPrefs(int $preferences): int {}
    /**
     * Transform to a document
     */
     public function transformToDoc(object $document, ?string $returnClass = NULL): object|false {}
    /**
     * Transform to URI
     */
     public function transformToUri(object $document, string $uri): int {}
    /**
     * Transform to XML
     */
     public function transformToXml(object $document): string|false|null {}
}

/**
 * ZipArchive 类
 */
 class ZipArchive implements \Countable {
    public const AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE = 16;
    public const AFL_IS_TORRENTZIP = 4;
    public const AFL_RDONLY = 2;
    public const AFL_WANT_TORRENTZIP = 8;
    public const CHECKCONS = 4;
    public const CM_BZIP2 = 12;
    public const CM_DEFAULT = -1;
    public const CM_DEFLATE = 8;
    public const CM_DEFLATE64 = 9;
    public const CM_IMPLODE = 6;
    public const CM_LZ77 = 19;
    public const CM_LZMA = 14;
    public const CM_LZMA2 = 33;
    public const CM_PKWARE_IMPLODE = 10;
    public const CM_PPMD = 98;
    public const CM_REDUCE_1 = 2;
    public const CM_REDUCE_2 = 3;
    public const CM_REDUCE_3 = 4;
    public const CM_REDUCE_4 = 5;
    public const CM_SHRINK = 1;
    public const CM_STORE = 0;
    public const CM_TERSE = 18;
    public const CM_WAVPACK = 97;
    public const CM_XZ = 95;
    public const CM_ZSTD = 93;
    public const CREATE = 1;
    public const EM_AES_128 = 257;
    public const EM_AES_192 = 258;
    public const EM_AES_256 = 259;
    public const EM_NONE = 0;
    public const EM_TRAD_PKWARE = 1;
    public const EM_UNKNOWN = 65535;
    public const ER_CANCELLED = 32;
    public const ER_CHANGED = 15;
    public const ER_CLOSE = 3;
    public const ER_COMPNOTSUPP = 16;
    public const ER_COMPRESSED_DATA = 31;
    public const ER_CRC = 7;
    public const ER_DATA_LENGTH = 33;
    public const ER_DELETED = 23;
    public const ER_ENCRNOTSUPP = 24;
    public const ER_EOF = 17;
    public const ER_EXISTS = 10;
    public const ER_INCONS = 21;
    public const ER_INTERNAL = 20;
    public const ER_INUSE = 29;
    public const ER_INVAL = 18;
    public const ER_MEMORY = 14;
    public const ER_MULTIDISK = 1;
    public const ER_NOENT = 9;
    public const ER_NOPASSWD = 26;
    public const ER_NOT_ALLOWED = 34;
    public const ER_NOZIP = 19;
    public const ER_OK = 0;
    public const ER_OPEN = 11;
    public const ER_OPNOTSUPP = 28;
    public const ER_RDONLY = 25;
    public const ER_READ = 5;
    public const ER_REMOVE = 22;
    public const ER_RENAME = 2;
    public const ER_SEEK = 4;
    public const ER_TELL = 30;
    public const ER_TMPOPEN = 12;
    public const ER_TRUNCATED_ZIP = 35;
    public const ER_WRITE = 6;
    public const ER_WRONGPASSWD = 27;
    public const ER_ZIPCLOSED = 8;
    public const ER_ZLIB = 13;
    public const EXCL = 2;
    public const FL_CENTRAL = 512;
    public const FL_COMPRESSED = 4;
    public const FL_ENCRYPTED = 32;
    public const FL_ENC_CP437 = 4096;
    public const FL_ENC_GUESS = 0;
    public const FL_ENC_RAW = 64;
    public const FL_ENC_STRICT = 128;
    public const FL_ENC_UTF_8 = 2048;
    public const FL_LOCAL = 256;
    public const FL_NOCASE = 1;
    public const FL_NODIR = 2;
    public const FL_OPEN_FILE_NOW = 1073741824;
    public const FL_OVERWRITE = 8192;
    public const FL_RECOMPRESS = 16;
    public const FL_UNCHANGED = 8;
    public const LENGTH_TO_END = 0;
    public const LENGTH_UNCHECKED = -2;
    public const LIBZIP_VERSION = "1.12";
    public const OPSYS_ACORN_RISC = 13;
    public const OPSYS_ALTERNATE_MVS = 15;
    public const OPSYS_AMIGA = 1;
    public const OPSYS_ATARI_ST = 5;
    public const OPSYS_BEOS = 16;
    public const OPSYS_CPM = 9;
    public const OPSYS_DEFAULT = 3;
    public const OPSYS_DOS = 0;
    public const OPSYS_MACINTOSH = 7;
    public const OPSYS_MVS = 11;
    public const OPSYS_OPENVMS = 2;
    public const OPSYS_OS_2 = 6;
    public const OPSYS_OS_400 = 18;
    public const OPSYS_OS_X = 19;
    public const OPSYS_TANDEM = 17;
    public const OPSYS_UNIX = 3;
    public const OPSYS_VFAT = 14;
    public const OPSYS_VM_CMS = 4;
    public const OPSYS_VSE = 12;
    public const OPSYS_WINDOWS_NTFS = 10;
    public const OPSYS_Z_SYSTEM = 8;
    public const OVERWRITE = 8;
    public const RDONLY = 16;
    public string $comment;
    public string $filename;
    public int $lastId;
    public int $numFiles;
    public int $status;
    public int $statusSys;
    /**
     * Add a new directory
     */
     public function addEmptyDir(string $dirname, int $flags = 0): bool {}
    /**
     * Adds a file to a ZIP archive from the given path
     */
     public function addFile(string $filepath, string $entryname = "", int $start = 0, int $length = ZipArchive::LENGTH_TO_END, int $flags = ZipArchive::FL_OVERWRITE): bool {}
    /**
     * Add a file to a ZIP archive using its contents
     */
     public function addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE): bool {}
    /**
     * Add files from a directory by glob pattern
     */
     public function addGlob(string $pattern, int $flags = 0, array $options = []): array|false {}
    /**
     * Add files from a directory by PCRE pattern
     */
     public function addPattern(string $pattern, string $path = ".", array $options = []): array|false {}
    /**
     * 清除状态错误消息、系统和/或 zip 消息 (PHP 8 >= 8.2.0, PECL zip >= 1.20.0)
     */
     public function clearError(): void {}
    /**
     * Close the active archive (opened or newly created)
     */
     public function close(): bool {}
    /**
     * Counts the number of files in the archive
     */
     public function count(): int {}
    /**
     * Delete an entry in the archive using its index
     */
     public function deleteIndex(int $index): bool {}
    /**
     * Delete an entry in the archive using its name
     */
     public function deleteName(string $name): bool {}
    /**
     * 解压缩文件
     */
     public function extractTo(string $pathto, array|string|null $files = NULL): bool {}
    /**
     * Returns the Zip archive comment
     */
     public function getArchiveComment(int $flags = 0): string|false {}
    /**
     * 返回 Zip 归档全局 flag 的值
     */
     public function getArchiveFlag(int $flag, int $flags = 0): int {}
    /**
     * Returns the comment of an entry using the entry index
     */
     public function getCommentIndex(int $index, int $flags = 0): string|false {}
    /**
     * Returns the comment of an entry using the entry name
     */
     public function getCommentName(string $name, int $flags = 0): string|false {}
    /**
     * Retrieve the external attributes of an entry defined by its index
     */
     public function getExternalAttributesIndex(int $index, &$opsys, &$attr, int $flags = 0): bool {}
    /**
     * Retrieve the external attributes of an entry defined by its name
     */
     public function getExternalAttributesName(string $name, &$opsys, &$attr, int $flags = 0): bool {}
    /**
     * Returns the entry contents using its index
     */
     public function getFromIndex(int $index, int $len = 0, int $flags = 0): string|false {}
    /**
     * Returns the entry contents using its name
     */
     public function getFromName(string $name, int $len = 0, int $flags = 0): string|false {}
    /**
     * Returns the name of an entry using its index
     */
     public function getNameIndex(int $index, int $flags = 0): string|false {}
    /**
     * Returns the status error message, system and/or zip messages
     */
     public function getStatusString(): string {}
    /**
     * Get a file handler to the entry defined by its name (read only)
     */
     public function getStream(string $name) {}
    /**
     * Get a file handler to the entry defined by its index (read only) (PHP 8 >= 8.2.0, PECL zip >= 1.20.0)
     */
     public function getStreamIndex(int $index, int $flags = 0) {}
    /**
     * Get a file handler to the entry defined by its name (read only) (PHP 8 >= 8.2.0, PECL zip >= 1.20.0)
     */
     public function getStreamName(string $name, int $flags = 0) {}
    public static function isCompressionMethodSupported(int $method, bool $enc = true): bool {}
    public static function isEncryptionMethodSupported(int $method, bool $enc = true): bool {}
    /**
     * Returns the index of the entry in the archive
     */
     public function locateName(string $name, int $flags = 0): int|false {}
    /**
     * Open a ZIP file archive
     */
     public function open(string $filename, int $flags = 0): int|bool {}
    /**
     * Register a callback to allow cancellation during archive close.
     */
     public function registerCancelCallback(callable $callback): bool {}
    /**
     * Register a callback to provide updates during archive close.
     */
     public function registerProgressCallback(float $rate, callable $callback): bool {}
    /**
     * Renames an entry defined by its index
     */
     public function renameIndex(int $index, string $new_name): bool {}
    /**
     * Renames an entry defined by its name
     */
     public function renameName(string $name, string $new_name): bool {}
    /**
     * Replace file in ZIP archive with a given path
     */
     public function replaceFile(string $filepath, int $index, int $start = 0, int $length = ZipArchive::LENGTH_TO_END, int $flags = 0): bool {}
    /**
     * Set the comment of a ZIP archive
     */
     public function setArchiveComment(string $comment): bool {}
    /**
     * 设置 ZIP 归档的全局 flag
     */
     public function setArchiveFlag(int $flag, int $value): bool {}
    /**
     * Set the comment of an entry defined by its index
     */
     public function setCommentIndex(int $index, string $comment): bool {}
    /**
     * Set the comment of an entry defined by its name
     */
     public function setCommentName(string $name, string $comment): bool {}
    /**
     * Set the compression method of an entry defined by its index
     */
     public function setCompressionIndex(int $index, int $method, int $compflags = 0): bool {}
    /**
     * Set the compression method of an entry defined by its name
     */
     public function setCompressionName(string $name, int $method, int $compflags = 0): bool {}
    /**
     * Set the encryption method of an entry defined by its index
     */
     public function setEncryptionIndex(int $index, int $method, ?string $password = NULL): bool {}
    /**
     * Set the encryption method of an entry defined by its name
     */
     public function setEncryptionName(string $name, int $method, ?string $password = NULL): bool {}
    /**
     * Set the external attributes of an entry defined by its index
     */
     public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = 0): bool {}
    /**
     * Set the external attributes of an entry defined by its name
     */
     public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = 0): bool {}
    /**
     * Set the modification time of an entry defined by its index
     */
     public function setMtimeIndex(int $index, int $timestamp, int $flags = 0): bool {}
    /**
     * Set the modification time of an entry defined by its name
     */
     public function setMtimeName(string $name, int $timestamp, int $flags = 0): bool {}
    /**
     * Set the password for the active archive
     */
     public function setPassword(string $password): bool {}
    /**
     * Get the details of an entry defined by its index
     */
     public function statIndex(int $index, int $flags = 0): array|false {}
    /**
     * Get the details of an entry defined by its name
     */
     public function statName(string $name, int $flags = 0): array|false {}
    /**
     * Undo all changes done in the archive
     */
     public function unchangeAll(): bool {}
    /**
     * Revert all global changes done in the archive
     */
     public function unchangeArchive(): bool {}
    /**
     * Revert all changes done to an entry at the given index
     */
     public function unchangeIndex(int $index): bool {}
    /**
     * Revert all changes done to an entry with the given name
     */
     public function unchangeName(string $name): bool {}
}

final class __PHP_Incomplete_Class {
}

/**
 * finfo 类
 */
 class finfo {
    /**
     * 别名 finfo_open
     */
     public function __construct(int $flags = FILEINFO_NONE, ?string $magic_database = NULL) {}
    /**
     * 别名 finfo_buffer()
     */
     public function buffer(string $string, int $flags = FILEINFO_NONE, $context = NULL): string|false {}
    /**
     * 别名 finfo_file()
     */
     public function file(string $filename, int $flags = FILEINFO_NONE, $context = NULL): string|false {}
    /**
     * 别名 finfo_set_flags()
     */
     public function set_flags(int $flags): true {}
}

/**
 * mysqli 类
 */
 class mysqli {
    public string|int $affected_rows;
    public string $client_info;
    public int $client_version;
    public int $connect_errno;
    public ?string $connect_error;
    public int $errno;
    public string $error;
    public array $error_list;
    public int $field_count;
    public string $host_info;
    public ?string $info;
    public string|int $insert_id;
    public int $protocol_version;
    public string $server_info;
    public int $server_version;
    public string $sqlstate;
    public int $thread_id;
    public int $warning_count;
    /**
     * Open a new connection to the MySQL server
     */
     public function __construct(?string $hostname = NULL, ?string $username = NULL, ?string $password = NULL, ?string $database = NULL, ?int $port = NULL, ?string $socket = NULL) {}
    /**
     * 打开或关闭本次数据库连接的自动命令提交事务模式
     */
     public function autocommit(bool $enable): bool {}
    /**
     * Starts a transaction
     */
     public function begin_transaction(int $flags = 0, ?string $name = NULL): bool {}
    /**
     * Changes the user of the database connection
     */
     public function change_user(string $username, string $password, ?string $database): bool {}
    /**
     * 返回当前数据库连接的字符编码
     */
     public function character_set_name(): string {}
    /**
     * 关闭先前打开的数据库连接
     */
     public function close(): true {}
    /**
     * 提交当前事务
     */
     public function commit(int $flags = 0, ?string $name = NULL): bool {}
    public function connect(?string $hostname = NULL, ?string $username = NULL, ?string $password = NULL, ?string $database = NULL, ?int $port = NULL, ?string $socket = NULL): bool {}
    /**
     * Performs debugging operations
     */
     public function debug(string $options): true {}
    /**
     * 将调试信息输出到日志
     */
     public function dump_debug_info(): bool {}
    /**
     * 别名 mysqli_real_escape_string
     */
     public function escape_string(string $string): string {}
    /**
     * Prepares, binds parameters, and executes SQL statement (PHP 8 >= 8.2.0)
     */
     public function execute_query(string $query, ?array $params = NULL): \mysqli_result|bool {}
    /**
     * Returns a character set object
     */
     public function get_charset(): ?object {}
    /**
     * 获取 MySQL 客户端信息
     */
     public function get_client_info(): string {}
    /**
     * 返回客户端连接的统计数据
     */
     public function get_connection_stats(): array {}
    /**
     * 返回 MySQL 服务器的版本号
     */
     public function get_server_info(): string {}
    /**
     * Get result of SHOW WARNINGS
     */
     public function get_warnings(): \mysqli_warning|false {}
    /**
     * 初始化 MySQLi 并返回用于 mysqli_real_connect() 的对象
     */
     public function init() {}
    /**
     * 让服务器杀死一个 MySQL 线程
     */
     public function kill(int $process_id): bool {}
    /**
     * 检查批量查询中是否还有查询结果
     */
     public function more_results(): bool {}
    /**
     * 在数据库上执行一个或多个查询
     */
     public function multi_query(string $query): bool {}
    /**
     * 为读取 multi_query 执行之后的下一个结果集做准备
     */
     public function next_result(): bool {}
    /**
     * 设置选项
     */
     public function options(int $option, $value): bool {}
    /**
     * ping 一个连接，或者如果连接处于断开状态，重新连接
     */
     public function ping(): bool {}
    /**
     * 轮询连接
     */
     public static function poll(?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0): int|false {}
    /**
     * 预处理执行 SQL
     */
     public function prepare(string $query): \mysqli_stmt|false {}
    /**
     * 对数据库执行查询
     */
     public function query(string $query, int $result_mode = MYSQLI_STORE_RESULT): \mysqli_result|bool {}
    /**
     * 建立一个 MySQL 服务器连接
     */
     public function real_connect(?string $hostname = NULL, ?string $username = NULL, ?string $password = NULL, ?string $database = NULL, ?int $port = NULL, ?string $socket = NULL, int $flags = 0): bool {}
    /**
     * 根据当前连接的字符集，对于 SQL 语句中的特殊字符进行转义
     */
     public function real_escape_string(string $string): string {}
    /**
     * 执行一个mysql查询
     */
     public function real_query(string $query): bool {}
    /**
     * 获取异步查询的结果
     */
     public function reap_async_query(): \mysqli_result|bool {}
    /**
     * 刷新
     */
     public function refresh(int $flags): bool {}
    /**
     * 从当前事务的保存点中移除一个命名保存点
     */
     public function release_savepoint(string $name): bool {}
    /**
     * 回滚当前事务
     */
     public function rollback(int $flags = 0, ?string $name = NULL): bool {}
    /**
     * 在当前事务中设置命名保存点
     */
     public function savepoint(string $name): bool {}
    /**
     * 选择用于数据库查询的默认数据库
     */
     public function select_db(string $database): bool {}
    /**
     * 设置客户端字符集
     */
     public function set_charset(string $charset): bool {}
    /**
     * 别名 mysqli_options
     */
     public function set_opt(int $option, $value): bool {}
    /**
     * 用于使用 SSL 建立安全连接
     */
     public function ssl_set(?string $key, ?string $certificate, ?string $ca_certificate, ?string $ca_path, ?string $cipher_algos): true {}
    /**
     * 获取当前系统状态信息
     */
     public function stat(): string|false {}
    /**
     * 初始化语句并返回用于 mysqli_stmt_prepare（调用）的对象
     */
     public function stmt_init(): \mysqli_stmt|false {}
    /**
     * 传输上次查询的结果集
     */
     public function store_result(int $mode = 0): \mysqli_result|false {}
    /**
     * 返回是否线程安全
     */
     public function thread_safe(): bool {}
    /**
     * Initiate a result set retrieval
     */
     public function use_result(): \mysqli_result|false {}
}

/**
 * mysqli_driver 类
 */
 final class mysqli_driver {
    public string $client_info;
    public int $client_version;
    public int $driver_version;
    public int $report_mode;
}

/**
 * mysqli_result 类
 */
 class mysqli_result implements \IteratorAggregate, \Traversable {
    public int $current_field;
    public int $field_count;
    public ?array $lengths;
    public string|int $num_rows;
    public int $type;
    /**
     * Constructs a mysqli_result object
     */
     public function __construct(\mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT) {}
    public function close(): void {}
    /**
     * Adjusts the result pointer to an arbitrary row in the result
     */
     public function data_seek(int $offset): bool {}
    /**
     * Fetch all result rows as an associative array, a numeric array, or both
     */
     public function fetch_all(int $mode = MYSQLI_NUM): array {}
    /**
     * Fetch the next row of a result set as an associative, a numeric array, or both
     */
     public function fetch_array(int $mode = MYSQLI_BOTH): array|false|null {}
    /**
     * Fetch the next row of a result set as an associative array
     */
     public function fetch_assoc(): array|false|null {}
    /**
     * Fetch a single column from the next row of a result set (PHP 8 >= 8.1.0)
     */
     public function fetch_column(int $column = 0): string|int|float|false|null {}
    /**
     * Returns the next field in the result set
     */
     public function fetch_field(): object|false {}
    /**
     * Fetch meta-data for a single field
     */
     public function fetch_field_direct(int $index): object|false {}
    /**
     * Returns an array of objects representing the fields in a result set
     */
     public function fetch_fields(): array {}
    /**
     * Fetch the next row of a result set as an object
     */
     public function fetch_object(string $class = "stdClass", array $constructor_args = []): object|false|null {}
    /**
     * Fetch the next row of a result set as an enumerated array
     */
     public function fetch_row(): array|false|null {}
    /**
     * Set result pointer to a specified field offset
     */
     public function field_seek(int $index): true {}
    /**
     * Frees the memory associated with a result
     */
     public function free(): void {}
    public function free_result(): void {}
    /**
     * Retrieve an external iterator
     */
     public function getIterator(): \Iterator {}
}

/**
 * mysqli_sql_exception 类
 */
 final class mysqli_sql_exception extends \RuntimeException implements \Stringable, \Throwable {
    protected string $sqlstate;
    /**
     * Returns the SQLSTATE error code (PHP 8 >= 8.1.2)
     */
     public function getSqlState(): string {}
}

/**
 * mysqli_stmt 类
 */
 class mysqli_stmt {
    public string|int $affected_rows;
    public int $errno;
    public string $error;
    public array $error_list;
    public int $field_count;
    public int $id;
    public string|int $insert_id;
    public string|int $num_rows;
    public int $param_count;
    public string $sqlstate;
    /**
     * Constructs a new mysqli_stmt object
     */
     public function __construct(\mysqli $mysql, ?string $query = NULL) {}
    /**
     * Used to get the current value of a statement attribute
     */
     public function attr_get(int $attribute): int {}
    /**
     * Used to modify the behavior of a prepared statement
     */
     public function attr_set(int $attribute, int $value): bool {}
    /**
     * Binds variables to a prepared statement as parameters
     */
     public function bind_param(string $types, mixed &...$vars): bool {}
    /**
     * Binds variables to a prepared statement for result storage
     */
     public function bind_result(mixed &...$vars): bool {}
    /**
     * Closes a prepared statement
     */
     public function close(): true {}
    /**
     * Adjusts the result pointer to an arbitrary row in the buffered result
     */
     public function data_seek(int $offset): void {}
    /**
     * Executes a prepared statement
     */
     public function execute(?array $params = NULL): bool {}
    /**
     * Fetch results from a prepared statement into the bound variables
     */
     public function fetch(): ?bool {}
    /**
     * Frees stored result memory for the given statement handle
     */
     public function free_result(): void {}
    /**
     * Gets a result set from a prepared statement as a mysqli_result object
     */
     public function get_result(): \mysqli_result|false {}
    /**
     * Get result of SHOW WARNINGS
     */
     public function get_warnings(): \mysqli_warning|false {}
    /**
     * Check if there are more query results from a multiple query
     */
     public function more_results(): bool {}
    /**
     * Reads the next result from a multiple query
     */
     public function next_result(): bool {}
    /**
     * Returns the number of rows fetched from the server
     */
     public function num_rows(): string|int {}
    /**
     * Prepares an SQL statement for execution
     */
     public function prepare(string $query): bool {}
    /**
     * Resets a prepared statement
     */
     public function reset(): bool {}
    /**
     * Returns result set metadata from a prepared statement
     */
     public function result_metadata(): \mysqli_result|false {}
    /**
     * Send data in blocks
     */
     public function send_long_data(int $param_num, string $data): bool {}
    /**
     * Stores a result set in an internal buffer
     */
     public function store_result(): bool {}
}

/**
 * mysqli_warning 类
 */
 final class mysqli_warning {
    public int $errno;
    public string $message;
    public string $sqlstate;
    /**
     * Private constructor to disallow direct instantiation
     */
     private function __construct() {}
    /**
     * Fetch next warning
     */
     public function next(): bool {}
}

/**
 * The php_user_filter class
 */
 class php_user_filter {
    public string $filtername;
    public mixed $params;
    public $stream;
    /**
     * Called when applying the filter
     */
     public function filter($in, $out, &$consumed, bool $closing): int {}
    /**
     * Called when closing the filter
     */
     public function onClose(): void {}
    /**
     * Called when creating the filter
     */
     public function onCreate(): bool {}
}

/**
 * stdClass 类
 */
 class stdClass {
}

/**
 * The tidy class
 */
 class tidy {
    public ?string $errorBuffer;
    public ?string $value;
    /**
     * Constructs a new tidy object
     */
     public function __construct(?string $filename = NULL, array|string|null $config = NULL, ?string $encoding = NULL, bool $useIncludePath = false) {}
    /**
     * Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree
     */
     public function body(): ?\tidyNode {}
    /**
     * Execute configured cleanup and repair operations on parsed markup
     */
     public function cleanRepair(): bool {}
    /**
     * Run configured diagnostics on parsed and repaired markup
     */
     public function diagnose(): bool {}
    /**
     * Get current Tidy configuration
     */
     public function getConfig(): array {}
    /**
     * Get the Detected HTML version for the specified document
     */
     public function getHtmlVer(): int {}
    /**
     * Returns the value of the specified configuration option for the tidy document
     */
     public function getOpt(string $option): string|int|bool {}
    /**
     * Returns the documentation for the given option name
     */
     public function getOptDoc(string $option): string|false {}
    /**
     * Get release date (version) for Tidy library
     */
     public function getRelease(): string {}
    /**
     * Get status of specified document
     */
     public function getStatus(): int {}
    /**
     * Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree
     */
     public function head(): ?\tidyNode {}
    /**
     * Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree
     */
     public function html(): ?\tidyNode {}
    /**
     * Indicates if the document is a XHTML document
     */
     public function isXhtml(): bool {}
    /**
     * Indicates if the document is a generic (non HTML/XHTML) XML document
     */
     public function isXml(): bool {}
    /**
     * Parse markup in file or URI
     */
     public function parseFile(string $filename, array|string|null $config = NULL, ?string $encoding = NULL, bool $useIncludePath = false): bool {}
    /**
     * Parse a document stored in a string
     */
     public function parseString(string $string, array|string|null $config = NULL, ?string $encoding = NULL): bool {}
    /**
     * Repair a file and return it as a string
     */
     public static function repairFile(string $filename, array|string|null $config = NULL, ?string $encoding = NULL, bool $useIncludePath = false): string|false {}
    /**
     * Repair a string using an optionally provided configuration file
     */
     public static function repairString(string $string, array|string|null $config = NULL, ?string $encoding = NULL): string|false {}
    /**
     * Returns a tidyNode object representing the root of the tidy parse tree
     */
     public function root(): ?\tidyNode {}
}

/**
 * The tidyNode class
 */
 final class tidyNode {
    public readonly ?array $attribute;
    public readonly ?array $child;
    public readonly int $column;
    public readonly ?int $id;
    public readonly int $line;
    public readonly string $name;
    public readonly bool $proprietary;
    public readonly int $type;
    public readonly string $value;
    /**
     * Private constructor to disallow direct instantiation
     */
     private function __construct() {}
    /**
     * Returns the next sibling node of the current node (PHP 8 >= 8.4.0)
     */
     public function getNextSibling(): ?\tidyNode {}
    /**
     * Returns the parent node of the current node
     */
     public function getParent(): ?\tidyNode {}
    /**
     * Returns the previous sibling node of the current node (PHP 8 >= 8.4.0)
     */
     public function getPreviousSibling(): ?\tidyNode {}
    /**
     * Checks if a node has children
     */
     public function hasChildren(): bool {}
    /**
     * Checks if a node has siblings
     */
     public function hasSiblings(): bool {}
    /**
     * Checks if this node is ASP
     */
     public function isAsp(): bool {}
    /**
     * Checks if a node represents a comment
     */
     public function isComment(): bool {}
    /**
     * Checks if a node is an element node
     */
     public function isHtml(): bool {}
    /**
     * Checks if this node is JSTE
     */
     public function isJste(): bool {}
    /**
     * Checks if a node is PHP
     */
     public function isPhp(): bool {}
    /**
     * Checks if a node represents text (no markup)
     */
     public function isText(): bool {}
}
