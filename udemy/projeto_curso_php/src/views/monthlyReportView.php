<main class="content">
    <?php
        renderTitle(
            'Relatório Mensal',
            'Acompanhe seu saldo de horas',
            'icofont-ui-calendar'
        );
    ?>
    <div>
        <form class="mb-4" action="#" method="post">
            <div class="input-group">
                <?php if ($user->is_admin): ?>
                    <select name="user"  class="form-control mr-2"
                    placeholder="Selecione o usuário">
                        <option value="">Selecione o Usuário</option>
                        <?php
                            foreach($users as $user) {
                                $selectedUser = $user->id === $selectedUserId ? 'selected' : '';
                                echo "<option value='{$user->id}' $selectedUser >$user->name</option>";
                            }
                        ?>
                    </select>
                <?php endif ?>
                <select name="period"  class="form-control"
                placeholder="Selecione um periodo">
                <option value="">Selecione o Período</option>
                    <?php
                        foreach($periods as $key => $month) {
                            $selected = $key === $selectedPeriod ? 'selected' : '';
                            echo "<option value='{$key}' $selected >$month</option>";
                        }
                    ?>
                </select>
                <button class="btn btn-primary ml-2">
                    <i class="icofont-search"></i>
                </button>
            </div>
        </form>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Dia</th>
                <th>Entrada</th>
                <th>Almoço</th>
                <th>Retorno Al</th>
                <th>Saida</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                <?php foreach($report as $registry): ?>
                        <tr>
                            <td> <?= formatDateWihtLocale($registry->work_date, 'D, d/F/Y')?> </td>
                            <td> <?= $registry->time1 ?> </td>
                            <td> <?= $registry->time2 ?> </td>
                            <td> <?= $registry->time3 ?> </td>
                            <td> <?= $registry->time4 ?> </td>
                            <td> <?= $registry->getBalance() ?> </td>
                        </tr>
                    <?php endforeach ?>
                <tr class="bg-primary text-white">
                    <td> Horas Trabalhadas </td>
                    <td colspan="3"> <?= $sumOfWorkedTime ?> </td>
                    <td> Saldo Mensal </td>
                    <td> <?= $balance ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
