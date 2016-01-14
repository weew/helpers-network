<?php

if ( ! function_exists('ping')) {
    /**
     * Try to ping a host. Returns latency in ms if the host
     * could be reached, otherwise returns false.
     *
     * @param string $host any host or ip
     * @param int $timeout in seconds
     * @param int $ttl
     *
     * @return bool|int
     * @throws Exception
     */
    function ping($host, $timeout = 1, $ttl = 255) {
        $platform = strtolower(PHP_OS);

        if ($platform === 'darwin') {
            $timeout = $timeout * 1000;
        } else if ($platform !== 'linux') {
            throw new Exception('Your platform is not supported.');
        }

        $cmd = sprintf('ping -n -c 1 -t %s -W %s %s', $ttl, $timeout, $host);
        exec($cmd, $output, $return);
        $output = array_values(array_filter($output));

        if ( ! empty($output[1])) {
            $response = preg_match(
                '/time(?:=|<)(?<time>[\.0-9]+)(?:|\s)ms/', $output[1], $matches
            );

            if ($response > 0 && isset($matches['time'])) {
                return round($matches['time']);
            }
        }

        return false;
    }
}
