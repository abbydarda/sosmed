@servers(['web' => ['ubuntu@52.74.216.91']])

@task('foo', ['on' => 'web'])
    cd /var/www/html
    git pull origin master
@endtask
