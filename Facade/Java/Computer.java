public class Computer {
    private CPU cpu;
    private Memory memory;

    public Computer() {
        this.cpu = new CPU();
        this.memory = new Memory();
    }
    public void start() {
        this.cpu.run();
        this.memory.run();
    }

    public void shutdown() {
        this.cpu.shutdown();
        this.memory.shutdown();
    }
}