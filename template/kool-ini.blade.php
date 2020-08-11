[PHP]

; Maximum amount of memory a script may consume
; http://php.net/memory-limit
memory_limit = @{{ .Env.PHP_MEMORY_LIMIT }}

; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize = @{{ .Env.PHP_UPLOAD_MAX_FILESIZE }}

; Maximum size of POST data that PHP will accept.
; Its value may be 0 to disable the limit. It is ignored if POST data reading
; is disabled through enable_post_data_reading.
; http://php.net/post-max-size
post_max_size = @{{ .Env.PHP_POST_MAX_SIZE }}

; Maximum execution time of each script, in seconds
; http://php.net/max-execution-time
; Note: This directive is hardcoded to 0 for the CLI SAPI
max_execution_time = @{{ .Env.PHP_MAX_EXECUTION_TIME }}
