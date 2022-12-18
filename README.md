# Projeto CodeIgniter 4 

## ALC

COMANDOS BÁSICOS
- php spark serve

Git commands
- git add --all
- git commit -m "Initial commit"
- git push -u origin main

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).


## Important Change with index.php

`index.php` link do projeto

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## P H P

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

## DB
- $this->db->select("tb_imam.*,tb_bidang.bidang");
- $this->db->from("tb_imam");
- $this->db->join("tb_bidang","tb_imam.bidang_id = tb_bidang.id");
- $this->db->where("tb_imam.status","Pengerja");
- $this->db->order_by("coloumn_name");enter code here
- $this->db->get()->result_array();
