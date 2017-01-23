set :stage, :production
set :deploy_to, -> { "/home/187805/domains/collideatx.com" }
set :tmp_dir, "/home/187805/users/.home/capistrano_tmp"

# Simple Role Syntax
# ==================
#role :app, %w{deploy@example.com}
#role :web, %w{deploy@example.com}
#role :db,  %w{deploy@example.com}

# Extended Server Syntax
# ======================
server 's187805.gridserver.com', user: 'wearecollide.com', roles: %w{web app db}

SSHKit.config.command_map[:php] = "/usr/bin/php-latest"
SSHKit.config.command_map[:composer] = "php -d allow_url_fopen=on /home/187805/users/.home/install/bin/composer"
set :composer_install_flags, '--no-dev --prefer-dist --no-interaction --optimize-autoloader -vvv'


# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
#  set :ssh_options, {
#    keys: %w(~/.ssh/id_rsa),
#    forward_agent: false,
#    auth_methods: %w(password)
#  }

fetch(:default_env).merge!(wp_env: :production)

after 'deploy:publishing', 'gridserver:create_relative_symlinks'
