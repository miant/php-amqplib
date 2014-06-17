<?php

/* This file was autogenerated by spec/parser.php - Do not modify */

namespace PhpAmqpLib\Helper\Protocol;

class MethodMap080
{

    protected $method_map = array(
        '10,10' => 'connection_start',
        '10,11' => 'connection_start_ok',
        '10,20' => 'connection_secure',
        '10,21' => 'connection_secure_ok',
        '10,30' => 'connection_tune',
        '10,31' => 'connection_tune_ok',
        '10,40' => 'connection_open',
        '10,41' => 'connection_open_ok',
        '10,50' => 'connection_redirect',
        '10,60' => 'connection_close',
        '10,61' => 'connection_close_ok',
        '20,10' => 'channel_open',
        '20,11' => 'channel_open_ok',
        '20,20' => 'channel_flow',
        '20,21' => 'channel_flow_ok',
        '20,30' => 'channel_alert',
        '20,40' => 'channel_close',
        '20,41' => 'channel_close_ok',
        '30,10' => 'access_request',
        '30,11' => 'access_request_ok',
        '40,10' => 'exchange_declare',
        '40,11' => 'exchange_declare_ok',
        '40,20' => 'exchange_delete',
        '40,21' => 'exchange_delete_ok',
        '50,10' => 'queue_declare',
        '50,11' => 'queue_declare_ok',
        '50,20' => 'queue_bind',
        '50,21' => 'queue_bind_ok',
        '50,30' => 'queue_purge',
        '50,31' => 'queue_purge_ok',
        '50,40' => 'queue_delete',
        '50,41' => 'queue_delete_ok',
        '50,50' => 'queue_unbind',
        '50,51' => 'queue_unbind_ok',
        '60,10' => 'basic_qos',
        '60,11' => 'basic_qos_ok',
        '60,20' => 'basic_consume',
        '60,21' => 'basic_consume_ok',
        '60,30' => 'basic_cancel',
        '60,31' => 'basic_cancel_ok',
        '60,40' => 'basic_publish',
        '60,50' => 'basic_return',
        '60,60' => 'basic_deliver',
        '60,70' => 'basic_get',
        '60,71' => 'basic_get_ok',
        '60,72' => 'basic_get_empty',
        '60,80' => 'basic_ack',
        '60,90' => 'basic_reject',
        '60,100' => 'basic_recover_async',
        '60,110' => 'basic_recover',
        '60,111' => 'basic_recover_ok',
        '70,10' => 'file_qos',
        '70,11' => 'file_qos_ok',
        '70,20' => 'file_consume',
        '70,21' => 'file_consume_ok',
        '70,30' => 'file_cancel',
        '70,31' => 'file_cancel_ok',
        '70,40' => 'file_open',
        '70,41' => 'file_open_ok',
        '70,50' => 'file_stage',
        '70,60' => 'file_publish',
        '70,70' => 'file_return',
        '70,80' => 'file_deliver',
        '70,90' => 'file_ack',
        '70,100' => 'file_reject',
        '80,10' => 'stream_qos',
        '80,11' => 'stream_qos_ok',
        '80,20' => 'stream_consume',
        '80,21' => 'stream_consume_ok',
        '80,30' => 'stream_cancel',
        '80,31' => 'stream_cancel_ok',
        '80,40' => 'stream_publish',
        '80,50' => 'stream_return',
        '80,60' => 'stream_deliver',
        '90,10' => 'tx_select',
        '90,11' => 'tx_select_ok',
        '90,20' => 'tx_commit',
        '90,21' => 'tx_commit_ok',
        '90,30' => 'tx_rollback',
        '90,31' => 'tx_rollback_ok',
        '100,10' => 'dtx_select',
        '100,11' => 'dtx_select_ok',
        '100,20' => 'dtx_start',
        '100,21' => 'dtx_start_ok',
        '110,10' => 'tunnel_request',
        '120,10' => 'test_integer',
        '120,11' => 'test_integer_ok',
        '120,20' => 'test_string',
        '120,21' => 'test_string_ok',
        '120,30' => 'test_table',
        '120,31' => 'test_table_ok',
        '120,40' => 'test_content',
        '120,41' => 'test_content_ok',
    );



    public function get_method($method_sig)
    {
        return $this->method_map[$method_sig];
    }



    public function valid_method($method_sig)
    {
        return array_key_exists($method_sig, $this->method_map);
    }
}
