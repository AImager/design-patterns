public class MysqlAdapter implements DB {
    private Mysql mysql;

    public MysqlAdapter() {
        this.mysql = new Mysql();
    } 

    public void connect() {
        this.mysql.connectMysql();
    }
}